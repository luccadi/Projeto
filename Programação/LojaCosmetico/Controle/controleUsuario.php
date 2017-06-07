<?php

include '../Modelo/DB.php';
$db = new DB();
$tblName = 'usuario';
if (isset($_GET['edit'])) {
// SAVE DATA
    if (isset($_POST)) {
        
        if (!empty($_GET['edit']) && !empty($_POST['codigoFuncionalEditar']) && !empty($_POST['nomeEditar']) && !empty($_POST['cpfEditar']) && !empty($_POST['enderecoEditar']) && !empty($_POST['contaBancariaEditar'])) {
            $users1 = $db->getRows($tblName, array('codigoFuncional' => $_POST['codigoFuncionalEditar']));
            $verificar2 = true;
            if (!empty($users1)) {
//echo $_POST['periodo']." ";
                foreach ($users1 as $user2) {
                    if ($_POST['codigoFuncionalEditar'] == $user2['codigoFuncional'] && $_GET['edit'] != $user2['id']) {
                        $verificar2 = false;
                    }
                }
            }
            if ($verificar2 == false) {
                echo '<h2>Usuário já cadastrado!</h2>';
            } else {

                $userData = array(
                    'codigoFuncional' => $_POST['codigoFuncionalEditar'],
                    'nome' => $_POST['nomeEditar'],
                    'cpf' => $_POST['cpfEditar'],
                    'endereco' => $_POST['enderecoEditar'],
                    'contaBancaria' => $_POST['contaBancariaEditar'],
                    'tipoUsuario' => $_POST['tipoUsuarioEditar'],
                    'status' => $_POST['statusEditar']
                );


                $condition = array('id' => $_GET['edit']);
                $update = $db->update($tblName, $userData, $condition);
//echo $insert;
            }
        }
    }
    $conditions['where'] = array('id' => $_GET['edit']);
    $conditions['return_type'] = 'single';
    $data1 = $db->getRows($tblName, $conditions);
    echo json_encode($data1);

    exit();
}


if (isset($_GET['add'])) {

    if (!empty($_POST['codigoFuncional']) && !empty($_POST['nome']) && !empty($_POST['cpf']) && !empty($_POST['endereco']) && !empty($_POST['contaBancaria']) && !empty($_POST['tipoUsuario'])) {
        $users1 = $db->getRows($tblName, array('codigoFuncional' => $_POST['codigoFuncional']));
        $verificar2 = true;
        if (!empty($users1)) {
//echo $_POST['periodo']." ";
            foreach ($users1 as $user2) {
                if ($_POST['codigoFuncional'] == $user2['codigoFuncional']) {
                    $verificar2 = false;
                }
            }
        }
        if ($verificar2 == false) {
            echo '<h2>Usuário já cadastrado!</h2>';
        } else {

            $userData = array(
                'codigoFuncional' => $_POST['codigoFuncional'],
                'nome' => $_POST['nome'],
                'cpf' => $_POST['cpf'],
                'endereco' => $_POST['endereco'],
                'contaBancaria' => $_POST['contaBancaria'],
                'tipoUsuario' => $_POST['tipoUsuario'],
                'senha' => $_POST['codigoFuncional'],
            );

            $insert = $db->insert($tblName, $userData);
//echo $insert;
            if ($insert) {
                $conditions['where'] = array('id' => $insert);
                $conditions['return_type'] = 'single';
                $data1 = $db->getRows($tblName, $conditions);
                echo json_encode($data1);
            }
        }
    }
    exit();
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
    0 => 'codigoFuncional',
    1 => 'nome',
    2 => 'tipoUsuario',
    3 => 'status',
    4 => 'codigoFuncional',
    5 => 'codigoFuncional'
);
$tipoUsuario = " ";
$data = array();
$retornar = $db->listTable($columns, $tblName, $requestData);
while ($row = $retornar['query']->fetch_assoc()) {  // preparing an array
    $nestedData = array();
    $nestedData[] = $row['id'];
    $nestedData[] = $row['status'];
    if ($row['status'] == 1) {
        $status = "Ativo";
    } else {
        $status = "Desativado";
    }
    for ($i = 0; $i < count($columns); $i++) {
        $nestedData[] = $row["$columns[$i]"];
    }
    if ($nestedData[4] == 1) {
        $tipoUsuario = "Gerente ";
    } elseif ($nestedData[4] == 2) {
        $tipoUsuario = "Estoquista ";
    }elseif ($nestedData[4] == 3) {
        $tipoUsuario = "Administrador ";
    }
    $data[] = array_merge(array($nestedData[2]), array($nestedData[3]), array($tipoUsuario), array($status), array('<a data-id="row-' . $nestedData[0] . '" href="javascript:editRow(' . $nestedData[0] . ');" class="glyphicon glyphicon-edit"></a>'), array('<a href="javascript:desativar(' . $nestedData[0] . ');" class="glyphicon glyphicon-remove-circle"></a>'));
}



$json_data = array(
    "draw" => intval($retornar['requestData']['draw']), // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
    "recordsTotal" => intval($retornar['totalData']), // total number of records
    "recordsFiltered" => intval($retornar['totalFiltered']), // total number of records after searching, if there is no searching then totalFiltered = totalData
    "data" => $data // total data array
);

echo json_encode($json_data);  // send data as json format
?>