<?php
	$titulo = "Editar Fornecedores";
	require_once "utils/header.php";
?>
		<div class="corpo">
			<h1>Atualizar Fornecedores</h1>
			<br><br>
			<form id="formEditar">
				<label>ID</label>
				<input type="number" name="id" id="id">
				<label>Fornecedor</label>
				<input type="text" name="fornecedor" id="fornecedor">
				<label>Telefone</label>
				<input type="text" name="telefone" id="telefone">
				<label>Cidade</label>
				<input type="text" name="cidade" id="cidade">
				<label>Produto Fornecido</label>
				<input type="text" name="produtoforn" id="produtoforn">
				<button type="button" onclick="atualizarFornecedor()">Salvar</button>
			</form>

			<div id="msg_erro" style="color:red"></div>
			<div id="msg_sucesso" style="color:green"></div>
		</div>

		<script src="js/script.js"></script>
	</body>
</html>