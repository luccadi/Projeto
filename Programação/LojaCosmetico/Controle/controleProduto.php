<?php

include '../Modelo/DB.php';
$db = new DB();
$tblName = 'produto';

if (isset($_GET['edit'])) {
// SAVE DATA
    if (isset($_POST)) {
        if (!empty($_POST['codigoProdutoEditar']) && !empty($_POST['nomeProdutoEditar']) && !empty($_POST['descricaoEditar']) &&  !empty($_POST['precoVendaEditar']) && !empty($_POST['precoCompraEditar']) && !empty($_POST['categoriaEditar'])) {
            $conditions['where'] = array('id' => $_GET['edit']);
            $conditions['return_type'] = 'single';
            $produto = $db->getRows($tblName, $conditions);
            if ($produto && $_GET['edit'] != $produto['id']) {
                echo '<h2>Produto já cadastrado!</h2>';
            } else {
                $userData = array(
                    'codigoProduto' => $_POST['codigoProdutoEditar'],
                    'nomeProduto' => $_POST['nomeProdutoEditar'],
                    'descricao' => $_POST['descricaoEditar'],
                    'quantidade' => $_POST['quantidadeEditar'],
                    'precoVenda' => $_POST['precoVendaEditar'],
                    'precoCompra' => $_POST['precoCompraEditar'],
                    'categoria' => $_POST['categoriaEditar'],
                    'status' => $_POST['status']
                );


                $condition = array('id' => $_GET['edit']);
                $update = $db->update($tblName, $userData, $condition);
//echo $insert;
            }
        }
        $conditions['where'] = array('id' => $_GET['edit']);
        $conditions['return_type'] = 'single';
        $data1 = $db->getRows($tblName, $conditions);
        echo json_encode($data1);

        exit();
    }
}


if (isset($_GET['add'])) {

    if (!empty($_POST['codigoProduto']) && !empty($_POST['nomeProduto']) && !empty($_POST['descricao']) && !empty($_POST['quantidade']) && !empty($_POST['precoVenda']) && !empty($_POST['precoCompra']) && !empty($_POST['categoria'])) {
        $conditions['where'] = array('codigoProduto' => $_POST['codigoProduto']);
        $conditions['return_type'] = 'single';
        $produto = $db->getRows($tblName, $conditions);
        if ($produto) {
            echo '<h2>Produto já cadastrado!</h2>';
        } else {
            $userData = array(
                'codigoProduto' => $_POST['codigoProduto'],
                'nomeProduto' => $_POST['nomeProduto'],
                'descricao' => $_POST['descricao'],
                'quantidade' => $_POST['quantidade'],
                'precoVenda' => $_POST['precoVenda'],
                'precoCompra' => $_POST['precoCompra'],
                'categoria' => $_POST['categoria'],
            );

            $insert = $db->insert($tblName, $userData);
//echo $insert;
            if ($insert) {
                mkdir('../View/imagensProduto/' . $insert, 0777, true); // Cria uma nova pasta dentro do diretório atual
                $conditions['where'] = array('id' => $insert);
                $conditions['return_type'] = 'single';
                $data1 = $db->getRows($tblName, $conditions);
                echo json_encode($data1);
            }
        }
        exit();
    }
}

if (isset($_GET['desativar'])) {
    if (!empty($_GET['desativar'])) {
        $userData = array(
            'status' => 0
        );
        $condition = array('id' => $_GET['desativar']);
        $update = $db->update($tblName, $userData, $condition);
        $conditions['where'] = $condition;
        $conditions['return_type'] = 'single';
        $data1 = $db->getRows($tblName, $conditions);
        echo json_encode($data1);
    } else {
        echo '<h2>Preencha todos os dados!</h2>';
    }
    exit();
}

$requestData = $_REQUEST;
$columns = array(
// datatable column index  => database column name
    0 => 'codigoProduto',
    1 => 'nomeProduto',
    2 => 'quantidade',
    3 => 'status',
    4 => 'codigoProduto',
    5 => 'codigoProduto',
    6 => 'codigoProduto',
);
$data = array();
$retornar = $db->listTable($columns, $tblName, $requestData);
while ($row = $retornar['query']->fetch_assoc()) {  // preparing an array
    $nestedData = array();
    $nestedData[] = $row['id'];
    if ($row['status'] == 1) {
        $status = "Ativo";
    } else {
        $status = "Desativado";
    }
    for ($i = 0; $i < count($columns); $i++) {
        $nestedData[] = $row["$columns[$i]"];
    } 
    $data[] = array_merge(array($nestedData[1]), array($nestedData[2]), array($nestedData[3]), array($status), array('<a data-id="row-' . $nestedData[0] . '" href="javascript:editRow(' . $nestedData[0] . ');" class="glyphicon glyphicon-edit"></a>'), array('<a href="javascript:desativar(' . $nestedData[0] . ');" class="glyphicon glyphicon-remove-circle"></a>'), array('<a href="javascript:addFoto(' . $nestedData[0] . ');" class="glyphicon glyphicon-picture"></a>'));
}



$json_data = array(
    "draw" => intval($retornar['requestData']['draw']), // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
    "recordsTotal" => intval($retornar['totalData']), // total number of records
    "recordsFiltered" => intval($retornar['totalFiltered']), // total number of records after searching, if there is no searching then totalFiltered = totalData
    "data" => $data // total data array
);

echo json_encode($json_data);  // send data as json format
?>