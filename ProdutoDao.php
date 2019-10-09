<?php

require_once("../model/Banco.php");

class ProdutoDao {

    private $mysqli;

    public function __construct() {   
        $this->mysqli = Banco::getInstance()->getConnection();
    }

    public function salvar($p) {

        $stmt = $this->mysqli->prepare("INSERT INTO Compra (id, nome, fornecedor, valor , date , quantidade)
                                        VALUES (?,?,?,?,?,?)"); 
        
        if($stmt == FALSE) printf("Error: %s.\n", $this->mysqli->error);
        else {
            $id = $p->getId();
            $nome = $p->getNome();
            $fornecedor = $p->getFornecedor();
            $valor = $p->getValor();
            $quantidade = $p->getQuantidade();
            $date = date();
            $stmt->bind_param('issdsi', $id, $nome, $fornecedor, $valor, $date,$quantidade);//////////////?????????????????
            return $stmt->execute();
        }
    }

    public function update($p) {

        $stmt = $this->mysqli->prepare("UPDATE Compra SET id = ?, nome = ?, fornecedor = ? , valor = ?, quantidade = ?
                                        WHERE id = ?");
        
        if($stmt == FALSE) printf("Error: %s.\n", $this->mysqli->error);
        else {
            $id = $p->getId();
            $nome = $p->getNome();
            $fornecedor = $p->getFornecedor();
            $valor = $p->getValor();
            $ocupacao = $p->getQuantidade();
            echo $id . '';
            $stmt->bind_param('issdi', $id, $nome, $fornecedor, $valor,$quantidade);
            return $stmt->execute();
        }
    }

    public function getProduto() {
        $query = $this->mysqli->query("SELECT * FROM Compra");
        while ($row = $query->fetch_assoc()) {
           $result[] = $row;
        }
        return $result;
    }

    public function deletar($id) {
        if($this->mysqli->query("DELETE FROM Compra WHERE id = ".$id.";") == TRUE) {
            return true;
        }
        else return false;
    }

    public function getById($id) {
        $query = $this->mysqli->query("SELECT * FROM Compra WHERE id = ".$id.";");
        if($query->num_rows == 0) return false;
        else return $query->fetch_assoc();
    }
}

?>