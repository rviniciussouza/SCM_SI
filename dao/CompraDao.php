<?php

require_once($_SERVER['DOCUMENT_ROOT']."SCM_SI/model/Banco.php");

class CompraDao {

    private $mysqli;

    public function __construct() {   
        $this->mysqli = Banco::getInstance()->getConnection();
    }

    public function salvar($p) {

        $stmt = $this->mysqli->prepare("INSERT INTO Compra (codproduto, nome, fornecedor, valor , data , quantidade)
                                        VALUES (?,?,?,?,?,?)"); 
        
        if($stmt == FALSE) printf("Error: %s.\n", $this->mysqli->error);
        else {
            $codproduto = $p->getCodproduto();
            $nome = $p->getNome();
            $fornecedor = $p->getFornecedor();
            $valor = $p->getValor();
            $quantidade = $p->getQuantidade();
            $data = $p->getData();
            $stmt->bind_param('issdsi', $codproduto, $nome, $fornecedor, $valor, $data, $quantidade);
            return $stmt->execute();
        }
    }

    public function update($p) {

        $stmt = $this->mysqli->prepare("UPDATE Compra SET nome = ?, fornecedor = ? , valor = ?, quantidade = ?
                                        WHERE codigo = ?");
        
        if($stmt == FALSE) printf("Error: %s.\n", $this->mysqli->error);
        else {
            $codigo = $p->getCodigo();
            $nome = $p->getNome();
            $fornecedor = $p->getFornecedor();
            $valor = $p->getValor();
            $quantidade = $p->getQuantidade();
            $stmt->bind_param('ssdii', $nome, $fornecedor, $valor, $quantidade, $codigo);
            return $stmt->execute();
        }
    }

    public function getCompra() {
        $query = $this->mysqli->query("SELECT * FROM Compra");
        if($query->num_rows == 0) return NULL;
        while ($row = $query->fetch_assoc()) {
           $result[] = $row;
        }
        return $result;
    }

    public function deletar($codigo) {
        if($this->mysqli->query("DELETE FROM Compra WHERE codigo = ".$codigo.";") == TRUE) {
            return true;
        }
        else return false;
    }

    public function getById($codigo) {
        $query = $this->mysqli->query("SELECT * FROM Compra WHERE codigo = ".$codigo.";");
        if($query->num_rows == 0) return false;
        else return $query->fetch_assoc();
    }
}

?>