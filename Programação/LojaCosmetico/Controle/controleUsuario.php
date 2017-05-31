<?php

include '../Modelo/DB.php';
$db = new DB();
$tblName = 'usuario';
if (isset($_POST['action_type']) && !empty($_POST['action_type'])) {
    if ($_POST['action_type'] == 'data') {
        $conditions['where'] = array('id' => $_POST['id']);
        $conditions['return_type'] = 'single';
        $user = $db->getRows($tblName, $conditions);
        echo json_encode($user);
    } elseif ($_POST['action_type'] == 'view') {
        $users = $db->getRows($tblName, array('order_by' => 'codigoFuncional ASC'));
        if (!empty($users)) {
            $count = 0;
            $tipoUser = " ";
            foreach ($users as $user): $count++;
                if ($user['status'] == 0) {
                    echo '<tr style = "color: red">';
                } else {
                    echo '<tr>';
                }
                if ($user['tipoUsuario'] == 1) {
                    $tipoUser = 'Gerente';
                } else if ($user['tipoUsuario'] == 2) {
                    $tipoUser = 'Estoquista';
                }

                echo '<td>' . $user['codigoFuncional'] . '</td>';
                echo '<td>' . $user['nome'] . '</td>';
                echo '<td>' . $tipoUser . '</td>';

                echo '<td><a href="javascript:void(0);" class="glyphicon glyphicon-edit"  onclick="editUser(\'' . $user['id'] . '\')"></a></td>';
                echo '<td><a href="javascript:void(0);" href="javascript:void(0);" class="glyphicon glyphicon-remove-circle" onclick=" $(\'#delete_confirm_modal\').modal(\'show\'); deletar(\'' . $user['id'] . '\');"></a></td>';
                echo '</tr>';
            endforeach;
        } else {
            echo '<tr><td colspan="5">Nenhum usuário encontrado ......</td></tr>';
        }
    } elseif ($_POST['action_type'] == 'add') {
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
                echo $insert ? 'ok' : 'err';
            }
        } else {
            echo '<h2>Preencha todos os dados!</h2>';
        }
    } elseif ($_POST['action_type'] == 'edit') {
  
        if (!empty($_POST['id']) && !empty($_POST['codigoFuncionalEditar']) && !empty($_POST['nomeEditar']) && !empty($_POST['cpfEditar']) && !empty($_POST['enderecoEditar']) && !empty($_POST['contaBancariaEditar']) && !empty($_POST['tipoUsuarioEditar']) && !empty($_POST['statusEditar'])) {

            $userData = array(
                'codigoFuncional' => $_POST['codigoFuncionalEditar'],
                'nome' => $_POST['nomeEditar'],
                'cpf' => $_POST['cpfEditar'],
                'endereco' => $_POST['enderecoEditar'],
                'contaBancaria' => $_POST['contaBancariaEditar'],
                'tipoUsuario' => $_POST['tipoUsuarioEditar'],
                'status' => $_POST['statusEditar']
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
            $userData = array(
                'status' => 0
            );
            $condition = array('id' => $_POST['id']);
            $update = $db->update($tblName, $userData, $condition);
            // echo "<script>alert($update)</script>";
            echo $update ? 'ok' : 'err';
        } else {
            echo '<h2>Preencha todos os dados!</h2>';
        }

        /*
          if (!empty($_POST['id'])) {
          $condition = array('id' => $_POST['id']);
          $delete = $db->delete($tblName, $condition);
          echo $delete ? 'ok' : 'err';
          } */
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
}
?>