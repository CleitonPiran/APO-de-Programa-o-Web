<?php
require_once "PDO.php";
require_once "Fornecedor.php";

$fornecedor = $_POST["fornecedor"];
$telefone = $_POST["telefone"];
$cidade = $_POST["cidade"];
$produtoforn = $_POST["produtoforn"];

$fornecedorObj = new Fornecedor($fornecedor, $telefone, $cidade, $produtoforn);

$banco = new usePDO();

try {
    $fornecedorObj->salvar($banco);
    header("location: inserirforn.php?sucesso=s");
} catch (PDOException $e) {
    header("location: inserirforn.php?erro=Erro ao cadastrar: " . $e->getMessage());
}
?>