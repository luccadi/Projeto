<?php

include '../Modelo/DBTeste.php';
$db = new DB();
$tblName = 'categoria';
if (isset($_POST['action_type']) && !empty($_POST['action_type'])) {
    if ($_POST['action_type'] == 'data') {
        $user = $db->getRows($tblName, array('order_by' => 'nome ASC'));
        echo json_encode($user);
    } elseif ($_POST['action_type'] == 'view') {
        $users = $db->getRows($tblName, array('order_by' => 'nome ASC'));
        if (!empty($users)) {

            $count = 0;

            foreach ($users as $user): $count++;
                echo '<tr>';
                echo '<td>' . $user['id'] . '</td>';
                echo '<td>' . $user['nome'] . '</td>';

                echo '<td><a href="javascript:;" id ="edit" class="glyphicon glyphicon-edit"></a></td>';
                echo '<td><a a href="javascript:;" id ="delete" class="glyphicon glyphicon-trash"></a></td>';
                echo '</tr>';
            endforeach;
        }else {
            echo '<tr><td colspan="5">Nenhuma categoria encontrado ......</td></tr>';
        }
    } elseif ($_POST['action_type'] == 'add') {

        if (!empty($_POST['nomeCategoria'])) {
            $users1 = $db->getRows($tblName, array('nome' => $_POST['nomeCategoria']));
            $verificar2 = true;
            if (!empty($users1)) {
                //echo $_POST['periodo']." ";
                foreach ($users1 as $user2) {
                    if ($_POST['nomeCategoria'] == $user2['nome']) {
                        $verificar2 = false;
                    }
                }
            }
            if ($verificar2 == false) {
                echo '<h2>Categoria já cadastrado!</h2>';
            } else {

                $userData = array(
                    'nome' => $_POST['nomeCategoria']
                );

                $insert = $db->insert($tblName, $userData);
                echo $insert ? 'ok' : 'err';
            }
        } else {
            echo '<h2>Preencha todos os dados!</h2>';
        }
    } elseif ($_POST['action_type'] == 'edit') {
        //echo $_POST['id']." ".$_POST['idUsuario']." ".$_POST['nome'];
        if (!empty($_POST['id']) && !empty($_POST['nomeCategoria'])) {
            $userData = array(
                'nomeCategoria' => $_POST['nomeCategoria']
            );
            $condition = array('id' => $_POST['id']);
            $update = $db->update($tblName, $userData, $condition);
            // echo "<script>alert($update)</script>";
            echo $update ? 'ok' : 'err';
        } else {
            echo '<h2>Preencha todos os dados!</h2>';
        }
    } elseif ($_POST['action_type'] == 'delete') {
        if (!empty($_POST['id'])) {
            $condition = array('id' => $_POST['id']);
            $delete = $db->delete($tblName, $condition);
            echo $delete ? 'ok' : 'err';
        }
    } elseif ($_POST['action_type'] == 'verificar') {
        if (!empty($_POST['id'])) {
            $verificar = $db->verificar($_POST['id']);
            if ($verificar == 'err') {
                echo 'err';
            } else {
                echo $verificar;
            }
        }
    }
    exit;
} else {
    $tblName = "categoria";
    $requestData = $_REQUEST;
    $columns = array(
// datatable column index  => database column name
        0 => 'id',
        1 => 'nome',
    );

    $data = array();
    $retornar = $db->listTable($columns, $tblName, $requestData);
    while ($row = $retornar['query']->fetch_assoc()) {  // preparing an array
        $nestedData = array();

        for ($i = 0; $i < count($columns); $i++) {
            $nestedData[] = $row["$columns[$i]"];
        }
    
        $data[] = array_merge(array($nestedData[0]), array($nestedData[1]), array('<a href="javascript:;" id ="edit" class="glyphicon glyphicon-edit"></a>'), array('<a a href="javascript:;" id ="delete" class="glyphicon glyphicon-trash"></a>'));
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