<?php
require_once "PDO.php";
require_once "pessoas.php";

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$confirmar_senha = $_POST["confirmar_senha"];

if ($senha !== $confirmar_senha) {
    header("location: inserir.php?erro=As senhas não coincidem.");
    exit();
}

$pessoa = new Pessoa($nome, $idade, $email, $senha);
$banco = new usePDO();

try {
    $pessoa->salvar($banco);
    header("location: inserir.php?sucesso=s");
} catch (PDOException $e) {
    header("location: inserir.php?erro=Erro ao cadastrar: " . $e->getMessage());
}
?>