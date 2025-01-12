<?php

$path = realpath('.');
require_once(__DIR__."/../dao/CompraDao.php");
require_once(__DIR__."/../model/Compra.php");

class CompraController {

    private $compraDao;

    public function __construct() {
        $this->compraDao = new CompraDao();
    }

    public function salvar() {

        $compra = new Compra();
        $compra->setAll($_POST);
        if($this->compraDao->salvar($compra)) {
            echo "<script>alert('Compra incluído com sucesso!');document.location='../cadastrar.php'</script>";
        } else{
            echo "<script>alert('Erro ao gravar compra!');history.back()</script>";
        }
    }

    public function listar() {
        $row = $this->compraDao->getCompra();
        if($row == FALSE) {
            echo "Nenhum dado foi encontrado";
        }
        else {
            foreach ($row as $value){
                echo "<tr>";
                echo "<td>".$value['codproduto'] ."</td>";
                echo "<td>".$value['nome'] ."</td>";
                echo "<td>".$value['fornecedor'] ."</td>";
                echo "<td>".$value['valor'] ."</td>";
                echo "<td>".$value['quantidade'] ."</td>";
                echo "<td>".$value['data'] ."</td>";
                echo "<td>
                        <a href='editar.php?codigo=".$value['codigo']."'><img src='media/images/edit_pencil.png' height='24'/></a>
                        <a class='remove'  data-codigo=".$value['codigo']."><img src='media/images/delete.png' height='20'/></a></td>";
                echo "</tr>";
            }
        }
    }

    public function deletar($codigo) {
        if($this->compraDao->deletar($codigo)) {
            $response_array['status'] = 'sucess';
        }
        else {
            $response_array['status'] = 'error';
        }
        header('Content-type: application/json');
        echo json_encode($response_array);
    }

    public function getById($codigo) {
        $result = $this->compraDao->getById($codigo);
        return $result;
    }

    public function update() {

        $compra = new Compra();
        $compra->setCodigo($_POST['codigo']);
        $compra->setNome($_POST['nome']);
        $compra->setFornecedor($_POST['fornecedor']);
        $compra->setValor($_POST['valor']);
        $compra->setQuantidade($_POST['quantidade']);
        if($this->compraDao->update($compra)) {
            session_start();
            $_SESSION['msg'] = "sucesso";
            echo "<script>document.location='../index.php'</script>";

        }else{
            session_start();
            $_SESSION['msg'] = "erro";
            echo "<script>alert('Erro ao atualizar compra!');history.back()</script>";
        }
        
    }

    public function getUltimaCompra($codproduto) {

        $result = $this->compraDao->getDataUltimaCompra($codproduto);
        $response_array = array();
        if($result == FALSE) {
            $response_array['status'] = 'false';
        } else {
            $response_array['status'] = 'true';            
            $response_array['data'] = $result['data'];            
        }
        header('Content-type: application/json');
        echo json_encode($response_array);
    }

}


$compraController = new CompraController();

if(isset($_GET['action']) && $_GET['action'] == 'salvar') {
    $compraController->salvar();
}

else if(isset($_GET['action']) && $_GET['action'] == 'update') {
    $compraController->update();
}

else if(isset($_GET['action']) && $_GET['action'] == 'excluir') {
    $codigo = $_GET["codigo"];
    $compraController->deletar($codigo);
}

?>