<?php
require_once "PDO.php";
require_once "Produto.php";

$produto = $_POST["produto"];
$valor = $_POST["valor"];
$fornproduto = $_POST["fornproduto"];

$produtoObj = new Produto($produto, $valor, $fornproduto);

$banco = new usePDO();

try {
    $produtoObj->salvar($banco);
    header("location: inserirprod.php?sucesso=s");
} catch (PDOException $e) {
    header("location: inserirprod.php?erro=Erro ao cadastrar: " . $e->getMessage());
}
?>