<?php

// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['username'];
$senha = $_POST['password'];

include '../Modelo/DB.php';
$db = new DB();
$tblName = 'usuario';
$conditions['where'] = array('codigoFuncional' => $_POST['username']);
$conditions['return_type'] = 'single';
$user = $db->getRows($tblName, $conditions);
if ($user) {
    if ($user['senha'] == $_POST['password'] && $user['codigoFuncional'] == $_POST['username']) {

        if ($user['tipoUsuario'] == 3) {
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            header('location:../View/PaginaMaster/usuario.php');
        } else if ($user['tipoUsuario'] == 2 && $user['status'] == 1) {
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            header('location:../View/PaginaEstoquista/estoque.php');
        }else if ($user['tipoUsuario'] == 1 && $user['status'] == 1) {
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            header('location:../View/PaginaGerente/produto.php');
        } else {
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            header('location:../index.php');
        }
    } else {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('location:../index.php?msgWrong');
    }
} else {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:../index.php?msgWrong');
}
?>