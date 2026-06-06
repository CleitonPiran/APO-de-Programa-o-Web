<?php
class Fornecedor {
    private $id;
    private $fornecedor;
    private $telefone;
    private $cidade;
    private $produtoforn;

    public function __construct($fornecedor, $telefone, $cidade, $produtoforn, $id = null) {
        $this->id = $id;
        $this->fornecedor = $fornecedor;
        $this->telefone = $telefone;
        $this->cidade = $cidade;
        $this->produtoforn = $produtoforn;
    }

    public function getId() {
        return $this->id;
    }

    public function getFornecedor() {
        return $this->fornecedor;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function salvar($banco) {
        $sql = "INSERT INTO fornecedores (fornecedor, telefone, cidade, produtoforn) VALUES (?, ?, ?, ?)";
        $params = [$this->fornecedor, $this->telefone, $this->cidade, $this->produtoforn];
        $banco->execSQL($sql, $params);
    }

    public function atualizar($banco) {
        $sql = "UPDATE fornecedores SET fornecedor = ?, telefone = ?, cidade = ?, produtoforn = ? WHERE id = ?";
        $params = [$this->fornecedor, $this->telefone, $this->cidade, $this->produtoforn, $this->id];
        $banco->execSQL($sql, $params);
    }
}
?>