<?php
session_start();
require_once "PDO.php";

$email = $_POST["email"];
$senha = $_POST["senha"];

if (empty($email) || empty($senha)) {
    header("location: login.php?erro=Email e senha são obrigatórios.");
    exit();
}

$banco = new usePDO();
$result = $banco->execSQL("SELECT id, nome, senha FROM pessoas WHERE email = '$email'");
$usuario = $result->fetch();

if ($usuario && hash('sha256', $senha) === $usuario['senha']) {
    $_SESSION["usuario_id"] = $usuario["id"];
    $_SESSION["usuario_nome"] = $usuario["nome"];
    header("location: index.php");
    exit();
} else {
    header("location: login.php?erro=Email ou senha incorretos.");
    exit();
}
?>