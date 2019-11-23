<?php require_once("controller/CompraController.php");
if(isset($_GET['codproduto']) && !empty($_GET['codproduto'])) {
    $codigo = $_GET['codproduto'];
    echo $compraController->getUltimaCompra($codigo);
}