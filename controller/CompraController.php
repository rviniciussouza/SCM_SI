<?php

require_once($_SERVER['DOCUMENT_ROOT']."SCM_SI/dao/CompraDao.php");
require_once($_SERVER['DOCUMENT_ROOT']."SCM_SI/model/Compra.php");

class CompraController {

    private $compraDao;

    public function __construct() {
        $this->compraDao = new CompraDao();
    }

    public function salvar() {

        $compra = new Compra();
        $compra->setAll($_POST);
        if($this->compraDao->salvar($compra)) {
            echo "<script>alert('Compra incluído com sucesso!');document.location='/../SCM_SI/view/compra/cadastrar.php'</script>";
        } else{
            echo "<script>alert('Erro ao gravar compra!');history.back()</script>";
        }
    }

    public function listar() {
        $row = $this->compraDao->getCompra();
        if($row == NULL) {
            echo "Nenhum dado foi encontrado";
        }
        else {
            foreach ($row as $value){
                echo "<tr>";
                echo "<td>".$value['codigo'] ."</td>";
                echo "<td>".$value['nome'] ."</td>";
                echo "<td>".$value['fornecedor'] ."</td>";
                echo "<td>".$value['valor'] ."</td>";
                echo "<td>".$value['quantidade'] ."</td>";
                echo "<td>".$value['data'] ."</td>";
                echo "<td>
                        <a class='btn btn-warning' href='view/compra/editar.php?codigo=".$value['codigo']."'>Editar</a>
                        <a class='btn btn-danger' href='controller/CompraController.php?action=excluir&codigo=".$value['codigo']."'>Excluir</a></td>";
                echo "</tr>";
            }
        }
    }

    public function deletar($codigo) {
        $this->compraDao->deletar($codigo);
        echo "<script>alert('Compra deletado com sucesso!');document.location='../index.php'</script>";
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
            echo "<script>alert('Compra editado c//om sucesso!');document.location='/SCM_SI/index.php'</script>";
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
    $codigo = $_GET["codigo"];
    $compraController->deletar($codigo);
}

?>