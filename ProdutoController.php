<?php

require_once("../dao/ProdutoDao.php");
require_once("../model/Produto.php");

class ProdutoController {

    private $produtoDao;

    public function __construct() {
        $this->produtoDao = new ProdutoDao();
    }

    public function salvar() {

        $produto = new Produto();
        $produto->setId($_POST['id']);
        $produto->setNome($_POST['nome']);
        $produto->setFornecedor($_POST['fornecedor']);
        $produto->setValor($_POST['valor']);
        $produto->setQuantidade($_POST['quantidade']);
        if($this->produtoDao->salvar($produto)) {
            echo "<script>alert('Produto incluído com sucesso!');document.location='../view/cadastrar_produto.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar produto!');history.back()</script>";
        }
        
    }

    public function listar() {
        $row = $this->produtoDao->getProduto();
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['id'] ."</th>";
            echo "<td>".$value['nome'] ."</td>";
            echo "<td>".$value['fornecedor'] ."</td>";
            echo "<td>".$value['valor'] ."</td>";
            echo "<td>".$value['quantidade'] ."</td>";
            echo "<td><a class='btn btn-warning' href='editar_produto.php?id=".$value['id']."'>Editar</a>
                      <a class='btn btn-danger' href='../controller/ProdutoController.php?action=excluir&id=".$value['id']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }

    public function deletar($id) {
        $this->produtoDao->deletar($id);
        echo "<script>alert('Produto deletado com sucesso!');document.location='../view/index.php'</script>";
    }

    public function getById($id) {
        $result = $this->produtoDao->getById($id);
        return $result;
    }

    public function update() {

        $produto = new Produto();
        $produto->setId($_POST['id']);
        $produto->setNome($_POST['nome']);
        $produto->setFornecedor($_POST['fornecedor']);
        $produto->setValor($_POST['valor']);
        $produto->setQuantidade($_POST['quantidade']);
        if($this->produtoDao->update($produto)) {
            echo "<script>alert('Produto editado com sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao atualizar produto!');history.back()</script>";
        }
        
    }

}


$produtoController = new ProdutoController();

if(isset($_GET['action']) && $_GET['action'] == 'salvar') {
    $produtoController->salvar();
}

else if(isset($_GET['action']) && $_GET['action'] == 'update') {
    $produtoController->update();
}

else if(isset($_GET['action']) && $_GET['action'] == 'excluir') {
    $id = $_GET["id"];
    $produtoController->deletar($id);
}

?>