<?php
	$titulo = "Editar Produtos";
	require_once "utils/header.php";
?>
		<div class="corpo">
			<h1>Atualizar Produtos</h1>
			<br><br>
			<form id="formEditar">
				<label>ID</label>
				<input type="number" name="id" id="id">
				<label>Produto</label>
				<input type="text" name="produto" id="produto">
				<label>Valor</label>
				<input type="number" name="valor" id="valor" step="0.01" min="0" required>
				<label>Fornecedor do Produto</label>
				<input type="text" name="fornproduto" id="fornproduto">
				<button type="button" onclick="atualizarProduto()">Salvar</button>
			</form>

			<div id="msg_erro" style="color:red"></div>
			<div id="msg_sucesso" style="color:green"></div>
		</div>

		<script src="js/script.js"></script>
	</body>
</html>