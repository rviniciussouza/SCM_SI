<?php

class Compra {

    private $codigo;
    private $produto_id;
    private $nome;
    private $fornecedor;
    private $valor;
    private $quantidade;

    public function setCodigo($id) {
        $this->id = $id;
    } 

    public function getCodigo() {
        return $this->id;
    }

    public function setProduto_id($id) {
        $this->id = $id;
    } 

    public function getProduto_id() {
        return $this->id;
    }


    public function setNome($nome) {
        $this->nome = $nome;
    } 

    public function getNome() {
        return $this->nome;
    }

    public function setFornecedor($fornecedor) {
        $this->fornecedor = $fornecedor;
    } 

    public function getFornecedor() {
        return $this->fornecedor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    } 

    public function getValor() {
        return $this->valor;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    } 

    public function getQuantidade() {
        return $this->quantidade;
    }
}

?>