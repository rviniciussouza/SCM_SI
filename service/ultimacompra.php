<?php

require_once("../controller/CompraController.php");

if(isset($_GET['codproduto']) && !empty($_GET['codproduto']) && isset($_GET['token'])) {
    $handler = curl_init('https://miniapp-ifnmg.herokuapp.com/usuario/'.$_GET['token']);
    curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);            
    $verify_token = json_decode(curl_exec($handler), true);
    curl_close($handler);
    if($verify_token['login'] == true) {
        $codigo = $_GET['codproduto'];
        echo $compraController->getUltimaCompra($codigo);   
    }
    else {
        $response_array['status'] = false;
        $response_array['detalhes'] = 'token invalido';
        header('Content-type: application/json');
        echo json_encode($response_array);
    }
}
