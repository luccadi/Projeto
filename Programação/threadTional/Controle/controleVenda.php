<?php

if (!empty($_POST['nome']) && !empty($_POST['endereco']) && !empty($_POST['cpf']) && !empty($_POST['formaPagamento']) && (!empty($_POST['number']))) {
    include '../Modelo/DB.php';
    $db = new DB();
    $tblName = 'cliente';
    $userData = array(
        'nome' => $_POST['nome'],
        'endereco' => $_POST['endereco'],
        'cpf' => $_POST['formaPagamento'],
        'number' => $_POST['number']
        
    );

    $insert = $db->insert($tblName, $userData);
       $tblName = 'Venda';
    $userData = array(
        'nome' => $_POST['nome'],
        'endereco' => $_POST['endereco'],
        'cpf' => $_POST['formaPagamento'],
        'number' => $_POST['number']
        
    );

    $insert = $db->insert($tblName, $userData);
    
}