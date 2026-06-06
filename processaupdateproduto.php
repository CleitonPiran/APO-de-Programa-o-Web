<?php
require_once "PDO.php";
require_once "Produto.php";

$id = $_POST["id"];
$produto = $_POST["produto"];
$valor = $_POST["valor"];
$fornproduto = $_POST["fornproduto"];

$valor = str_replace(['R$', '.', ','], ['', '', '.'], $valor);
$valor = (float) $valor;

$produtoObj = new Produto($produto, $valor, $fornproduto, $id);

$banco = new usePDO();

try {
    $produtoObj->atualizar($banco);
    echo "success";
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>