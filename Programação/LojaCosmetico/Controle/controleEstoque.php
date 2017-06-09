<?php
include '../Modelo/DB.php';
$db = new DB();
session_start();
if (isset($_POST['consultaEstoqueProdutos']) && !empty($_POST['consultaEstoqueProdutos'])) {
    $tblName = 'venda';
    $venda = $db->getRows($tblName, array('order_by' => 'codigoVenda ASC'));
    if (!empty($venda)) {
        $count = 0;
        foreach ($venda as $produto): $count++;
            if ($produto['codigoVenda'] == $_POST['consultaEstoqueProdutos']) {
                $conditions['return_type'] = 'single';
                $conditions['where'] = array('codigoProduto' => $produto['codigoProduto']);
                $prod = $db->getRows("produto", $conditions);
                if ($produto['codigoProduto'] == $prod['codigoProduto']) {
                    echo '<tr>';
                    echo '<td>' . $prod['codigoProduto'] . '</td>';
                    echo '<td>' . $prod['nomeProduto'] . '</td>';
                    echo '<td>' . $produto['quantidadeVendida'] . '</td>';
                    echo '<tr>';
                }
            }
        endforeach;
    } else {
        echo '<tr><td colspan="5">Nenhuma venda encontrado ......</td></tr>';
    }
    exit();
}



if (isset($_GET['enviar'])) {

    $conditions['where'] = array('id' => $_GET['enviar']);
    $conditions['return_type'] = 'single';
    $estoque = $db->getRows("estoque", $conditions);
    if ($estoque['status'] == 'disponivel') {
        $tblName = "estoque";
        $userData = array(
            'status' => 'ocupado',
            'codigoFuncional' => $_SESSION['login']
        );
        $condition1 = array('id' => $_GET['enviar']);
        $update = $db->update($tblName, $userData, $condition1);
        $conditions['where'] = $condition1;
        $conditions['return_type'] = 'single';
        $data1 = $db->getRows($tblName, $conditions);
        ///print_r($data1);

        $row1 = array(
            'id' => $data1['id'],
            'status' => $data1['status'],
            'codigoFuncional' => 'igual'
        );

        echo json_encode($row1);
    } else {
        if ($estoque['codigoFuncional'] == $_SESSION['login']) {
            $row2 = array(
                'id' => $estoque['id'],
                'status' => $estoque['status'],
                'codigoFuncional' => 'igual'
            );
        } else {
            $row2 = array(
                'id' => $estoque['id'],
                'status' => $estoque['status'],
                'codigoFuncional' => 'diferente'
            );
        }
        echo json_encode($row2);
    }
    exit();
}


if (isset($_POST['finalizar']) && !empty($_POST['finalizar'])) {

    $tblName = "estoque";
    $userData = array(
        'status' => 'finalizado',
    );
    $condition = array('id' => $_POST['finalizar']);
    $update = $db->update($tblName, $userData, $condition);
    echo $update ? 'ok' : 'err';

    exit();
}



if (isset($_GET['consultaEstoque'])) {
    $tblName = 'estoque';

    $requestData = $_REQUEST;


    $columns = array(
// datatable column index  => database column name
        0 => 'codigoVenda',
        1 => 'enderecoEnviar',
        2 => 'codigoVenda',
        3 => 'status'
    );

    $data = array();
    $retornar = $db->listTable($columns, $tblName, $requestData);
    //print_r($retornar['query']->fetch_assoc());
    while ($row = $retornar['query']->fetch_assoc()) {  // preparing an array
        $nestedData = array();
        $nestedData[] = $row['id'];
        for ($i = 0; $i < count($columns); $i++) {
            $nestedData[] = $row["$columns[$i]"];
        }

        if ($row['status'] == 'disponivel') {
            $data[] = array_merge(array($nestedData[1]), array($nestedData[2]), array('  <div class="btn-group">
                                <button  class=" btn btn-primary" onclick="visualizar(' . $nestedData[1] . ')">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                </button>
                            </div>'), array('  <div class="btn-group">
                                <button  class=" btn btn-green" onclick="enviar(' . $nestedData[0] . ')">'
                . $nestedData[4] .
                '      
                                    <i class="fa fa-truck"></i>
                                </button>
                            </div>'));
        } elseif ($row['status'] == 'ocupado' && $row['codigoFuncional'] == $_SESSION['login']) {
            $data[] = array_merge(array($nestedData[1]), array($nestedData[2]), array('  <div class="btn-group">
                               <button  class=" btn btn-primary" onclick="visualizar(' . $nestedData[1] . ')">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                </button>
                            </div>'), array('  <div class="btn-group">
                                <button  class=" btn btn-danger" onclick="remove(this); finalizar(' . $nestedData[0] . ')">
                                    Finalizar
                                    <i class="fa fa-truck"></i>
                                </button>
                            </div>'));
        } elseif ($row['status'] == 'ocupado' && $row['codigoFuncional'] != $_SESSION['login']) {
            $data[] = array_merge(array($nestedData[1]), array($nestedData[2]), array('  <div class="btn-group">
                               <button  class=" btn btn-primary">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                </button>
                            </div>'), array('  <div class="btn-group">
                                <button  class=" btn btn-warning" onclick="remove(this);">
                                    Ocupado
                                    <i class="fa fa-truck"></i>
                                </button>
                            </div>'));
        }
    }



    $json_data = array(
        "draw" => intval($retornar['requestData']['draw']), // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
        "recordsTotal" => intval($retornar['totalData']), // total number of records
        "recordsFiltered" => intval($retornar['totalFiltered']), // total number of records after searching, if there is no searching then totalFiltered = totalData
        "data" => $data // total data array
    );

    echo json_encode($json_data);
    exit();
}


if (isset($_GET['consultaProduto'])) {
    $tblName = 'produto';

    $requestData = $_REQUEST;


    $columns = array(
// datatable column index  => database column name
        0 => 'codigoProduto',
        1 => 'nomeProduto',
        2 => 'quantidade',
        3 => 'precoVenda',
        4 => 'categoria',
        5 => 'status',
    );

    $data = array();
    $retornar = $db->listTable($columns, $tblName, $requestData);
    while ($row = $retornar['query']->fetch_assoc()) {  // preparing an array
        $nestedData = array();
        if ($row['status'] == 1) {
            $status = "Ativo";
        } else {
            $status = "Desativado";
        }
        $reais = 'R$ ' . $row['precoVenda'];
        for ($i = 0; $i < count($columns); $i++) {
            $nestedData[] = $row["$columns[$i]"];
        }


        $data[] = array_merge(array($nestedData[0]), array($nestedData[1]), array($nestedData[2]), array($reais), array($nestedData[4]), array($status));
    }



    $json_data = array(
        "draw" => intval($retornar['requestData']['draw']), // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
        "recordsTotal" => intval($retornar['totalData']), // total number of records
        "recordsFiltered" => intval($retornar['totalFiltered']), // total number of records after searching, if there is no searching then totalFiltered = totalData
        "data" => $data // total data array
    );

    echo json_encode($json_data);  // send data as json format
}
?>