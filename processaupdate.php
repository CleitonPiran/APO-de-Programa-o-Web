<?php
require_once "PDO.php";
require_once "pessoas.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$idade = $_POST["idade"];
$email = $_POST["email"];

$pessoa = new Pessoa($nome, $idade, $email, "", $id);
$banco = new usePDO();

try {
    $pessoa->atualizar($banco);
    echo "success";
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>