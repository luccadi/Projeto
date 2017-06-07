<?php
include '../Modelo/DB.php';
    $db = new DB();
    $tblName = 'venda';

    $requestData = $_REQUEST;


    $columns = array(
// datatable column index  => database column name
        0 => 'codigoVenda',
        1 => 'codigoProduto',
        2 => 'quantidadeVendida',
        3 => 'precoTotalVendas',
        4 => 'created',
    );

    $data = array();
    $retornar = $db->listTable($columns, $tblName, $requestData);
    while ($row = $retornar['query']->fetch_assoc()) {  // preparing an array
        $nestedData = array();
          $reais = 'R$ ' . $row["precoTotalVendas"];
        
        for ($i = 0; $i < count($columns); $i++) {
            $nestedData[] = $row["$columns[$i]"];
        }


        $data[] = array_merge(array($nestedData[0]), array($nestedData[1]), array($nestedData[2]), array($reais), array($nestedData[4]));
    }



    $json_data = array(
        "draw" => intval($retornar['requestData']['draw']), // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
        "recordsTotal" => intval($retornar['totalData']), // total number of records
        "recordsFiltered" => intval($retornar['totalFiltered']), // total number of records after searching, if there is no searching then totalFiltered = totalData
        "data" => $data // total data array
    );

    echo json_encode($json_data);  // send data as json format

