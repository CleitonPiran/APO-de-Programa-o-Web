<?php
	$titulo = "Editar Pessoas";
	require_once "utils/header.php";
?>
		<div class="corpo">
			<h1>Atualizar Pessoas</h1>
			<br><br>
			<form id="formEditar">
				<label>ID</label>
				<input type="number" name="id" id="id">
				<label>Nome</label>
				<input type="text" name="nome" id="nome">
				<label>Idade</label>
				<input type="number" name="idade" id="idade">
				<label>Email</label>
				<input type="email" name="email" id="email">
				<button type="button" onclick="atualizarPessoa()">Salvar</button>
			</form>

			<div id="msg_erro" style="color:red"></div>
			<div id="msg_sucesso" style="color:green"></div>
		</div>

		<script src="js/script.js"></script>
	</body>
</html>