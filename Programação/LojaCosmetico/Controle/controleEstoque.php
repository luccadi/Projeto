<?php

if (isset($_GET['consultaEstoque'])) {
    
}


if (isset($_GET['consultaProduto'])) {
    include '../Modelo/DB.php';
    $db = new DB();
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