<?php

class Compra {

    private $codigo;
    private $codproduto;
    private $nome;
    private $fornecedor;
    private $data;
    private $valor;
    private $quantidade;

    public function getColumns() {
        return ["codigo", "codproduto", "nome", "fornecedor", "valor", "quantidade"];
    } 

    public function getAll() {
        return [
            'codigo'        => $this->codigo,
            'codproduto'    => $this->codproduto,
            'nome'          => $this->nome,
            'fornecedor'    => $this->fornecedor,
            'valor'         => $this->valor,
            'quantidade'    => $this->quantidade
        ];
    }

    public function setAll($data) {
        $this->codproduto   = $data['codproduto'];
        $this->nome         = $data['nome'];
        $this->data         = $data['data'];
        $this->fornecedor   = $data['fornecedor'];
        $this->valor        = $data['valor'];
        $this->quantidade   = $data['quantidade'];
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    } 

    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodproduto($codproduto) {
        $this->codproduto = $codproduto;
    } 

    public function getCodproduto() {
        return $this->codproduto;
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

    public function setData($data) {
        $this->data = $data;
    } 

    public function getData() {
        return $this->data;
    }
}

?>