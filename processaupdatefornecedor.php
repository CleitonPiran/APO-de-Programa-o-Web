<?php
require_once "PDO.php";
require_once "Fornecedor.php";

$id = $_POST["id"];
$fornecedor = $_POST["fornecedor"];
$telefone = $_POST["telefone"];
$cidade = $_POST["cidade"];
$produtoforn = $_POST["produtoforn"];

$fornecedorObj = new Fornecedor($fornecedor, $telefone, $cidade, $produtoforn, $id);
$banco = new usePDO();

try {
    $fornecedorObj->atualizar($banco);
    echo "success";
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>