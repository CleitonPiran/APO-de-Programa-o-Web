<?php
class Pessoa {
    private $id;
    private $nome;
    private $idade;
    private $email;
    private $senha;

    public function __construct($nome, $idade, $email, $senha, $id = null) {
        $this->id = $id;
        $this->nome = $nome;
        $this->idade = $idade;
        $this->email = $email;
        $this->senha = hash('sha256', $senha);
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function salvar($banco) {
        $sql = "INSERT INTO pessoas (nome, idade, email, senha) VALUES (?, ?, ?, ?)";
        $params = [$this->nome, $this->idade, $this->email, $this->senha];
        $banco->execSQL($sql, $params);
    }

    public function atualizar($banco) {
        $sql = "UPDATE pessoas SET nome = ?, idade = ?, email = ? WHERE id = ?";
        $params = [$this->nome, $this->idade, $this->email, $this->id];
        $banco->execSQL($sql, $params);
    }

    public function validarSenha($senha) {
        return hash('sha256', $senha) === $this->senha;
    }
}
?>