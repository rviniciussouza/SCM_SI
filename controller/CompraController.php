<?php

require_once("../dao/CompraDao.php");
require_once("../model/Compra.php");

class CompraController {

    private $compraDao;

    public function __construct() {
        $this->compraDao = new CompraDao();
    }

    public function salvar() {

        $compra = new Compra();
        $compra->setId($_POST['id']);
        $compra->setNome($_POST['nome']);
        $compra->setFornecedor($_POST['fornecedor']);
        $compra->setValor($_POST['valor']);
        $compra->setQuantidade($_POST['quantidade']);
        if($this->compraDao->salvar($compra)) {
            echo "<script>alert('Compra incluído com sucesso!');document.location='../view/cadastrar_compra.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar compra!');history.back()</script>";
        }
        
    }

    public function listar() {
        $row = $this->compraDao->getCompra();
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['id'] ."</th>";
            echo "<td>".$value['nome'] ."</td>";
            echo "<td>".$value['fornecedor'] ."</td>";
            echo "<td>".$value['valor'] ."</td>";
            echo "<td>".$value['quantidade'] ."</td>";
            echo "<td><a class='btn btn-warning' href='editar_compra.php?id=".$value['id']."'>Editar</a>
                      <a class='btn btn-danger' href='../controller/CompraController.php?action=excluir&id=".$value['id']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }

    public function deletar($id) {
        $this->compraDao->deletar($id);
        echo "<script>alert('Compra deletado com sucesso!');document.location='../view/index.php'</script>";
    }

    public function getById($id) {
        $result = $this->compraDao->getById($id);
        return $result;
    }

    public function update() {

        $compra = new Compra();
        $compra->setId($_POST['id']);
        $compra->setNome($_POST['nome']);
        $compra->setFornecedor($_POST['fornecedor']);
        $compra->setValor($_POST['valor']);
        $compra->setQuantidade($_POST['quantidade']);
        if($this->compraDao->update($compra)) {
            echo "<script>alert('Compra editado com sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao atualizar compra!');history.back()</script>";
        }
        
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
    $id = $_GET["id"];
    $compraController->deletar($id);
}

?>