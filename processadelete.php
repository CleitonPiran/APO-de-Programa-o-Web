<?php
require_once "PDO.php";

$id = $_POST["id"];

$banco = new usePDO();

$banco->execSQL("DELETE FROM pessoas WHERE id= '$id'");

header("location: deletar.php?sucesso=s");
?>