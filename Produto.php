<?php
class Produto {
    private $id;
    private $produto;
    private $valor;
    private $fornproduto;

    public function __construct($produto, $valor, $fornproduto, $id = null) {
        $this->id = $id;
        $this->produto = $produto;
        $this->valor = $valor;
        $this->fornproduto = $fornproduto;
    }

    public function getId() {
        return $this->id;
    }

    public function getProduto() {
        return $this->produto;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function salvar($banco) {
        $sql = "INSERT INTO produtos (produto, valor, fornproduto) VALUES (?, ?, ?)";
        $params = [$this->produto, $this->valor, $this->fornproduto];
        $banco->execSQL($sql, $params);
    }

    public function atualizar($banco) {
        $sql = "UPDATE produtos SET produto = ?, valor = ?, fornproduto = ? WHERE id = ?";
        $params = [$this->produto, $this->valor, $this->fornproduto, $this->id];
        $banco->execSQL($sql, $params);
    }
}
?>