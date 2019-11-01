<?php

require_once($_SERVER['DOCUMENT_ROOT']."/model/Banco.php");

class CompraDao {

    private $con;

    public function __construct() {   
        $this->con = Banco::getInstance()->getConnection();
    }

    public function salvar($p) {
        $sql = "INSERT INTO Compra (codproduto, nome, fornecedor, valor , data , quantidade) VALUES (?,?,?,?,?,?)";
        $stmt = $this->con->prepare($sql);
        $stmt->bindValue('1', $p->getCodproduto(), PDO::PARAM_INT);
        $stmt->bindValue('2', $p->getNome(), PDO::PARAM_STR);
        $stmt->bindValue('3', $p->getFornecedor(), PDO::PARAM_STR);
        $stmt->bindValue('4', $p->getValor(), PDO::PARAM_STR);
        $stmt->bindValue('5', $p->getData(), PDO::PARAM_STR);
        $stmt->bindValue('6', $p->getQuantidade(), PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function update($p) {

        $sql = "UPDATE Compra SET nome = ?, fornecedor = ? , valor = ?, quantidade = ? WHERE codigo = ?";
        $stmt = $this->con->prepare($sql);
        $stmt->bindValue('1', $p->getNome(), PDO::PARAM_STR);
        $stmt->bindValue('2', $p->getFornecedor(), PDO::PARAM_STR);
        $stmt->bindValue('3', $p->getValor(), PDO::PARAM_STR);
        $stmt->bindValue('4', $p->getQuantidade(), PDO::PARAM_INT);
        $stmt->bindValue('5', $p->getCodigo(), PDO::PARAM_INT);
        return $stmt->execute();

    }

    public function getCompra() {
        $stmt = $this->con->prepare("SELECT * FROM Compra");
        $stmt->execute();
        if($result =  $stmt->fetchAll(PDO::FETCH_ASSOC)) {
            return $result;
        }   
        else {
            return FALSE;
        }
    }

    public function getDataUltimaCompra($codproduto) {
        $sql = "SELECT data FROM Compra WHERE codproduto = :codproduto ORDER BY data DESC LIMIT 1";
        $stmt = $this->con->prepare($sql);
        $stmt->execute(array('codproduto' => $codproduto));
        if($result = $stmt->fetch()) {
            return $result;
        }
        return FALSE;
    }

    public function deletar($codigo) {
        $sql = "DELETE FROM Compra WHERE codigo = ?";
        $stmt = $this->con->prepare($sql);
        $stmt->bindValue('1', $codigo, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function getById($codigo) {
        $sql = "SELECT * FROM Compra WHERE codigo = :codigo";
        $stmt = $this->con->prepare($sql);
        $stmt->execute(array('codigo' => $codigo));
        if($result =  $stmt->fetch(PDO::FETCH_ASSOC)) {
            return $result;
        }   
        else {
            return FALSE;
        }
    }
}

?>