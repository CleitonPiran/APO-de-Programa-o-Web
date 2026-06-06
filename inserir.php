<?php
	$titulo = "Cadastrar Pessoas";
	require_once "utils/header.php";
?>
		<script type="text/javascript" src="js/script.js"></script>

		<div class="corpo container mt-4">
			<h1 class="text-center">Cadastro de Pessoas</h1>
			<br><br>
			<form action="processaform.php" method="POST" onsubmit="return validarSenha()" class="mx-auto" style="max-width: 500px;">
				<div class="mb-3">
					<label for="nome" class="form-label">Nome</label>
					<input type="text" name="nome" id="nome" class="form-control" onblur="validar_nome(this)">
				</div>
				<div class="mb-3">
					<label for="idade" class="form-label">Idade</label>
					<input type="number" name="idade" id="idade" class="form-control">
				</div>
				<div class="mb-3">
					<label for="email" class="form-label">Email</label>
					<input type="email" name="email" id="email" class="form-control">
				</div>
				<div class="mb-3">
					<label for="senha" class="form-label">Senha</label>
					<input type="password" name="senha" id="senha" class="form-control">
				</div>
				<div class="mb-3">
					<label for="confirmar_senha" class="form-label">Confirmar Senha</label>
					<input type="password" name="confirmar_senha" id="confirmar_senha" class="form-control">
				</div>
				<button type="submit" class="btn btn-primary">Salvar</button>
			</form>

			<h3 id="msg_erro" class="text-center text-danger mt-3">
				<?php
				if (isset($_GET["erro"])) {
					echo htmlspecialchars($_GET["erro"]);
				}
				?>
			</h3>
			<?php
			if (isset($_GET["sucesso"])){
				echo "<h3 class='text-center text-success'>Cadastro realizado com Sucesso</h3>";
			}
			?>

			<div class="text-center mt-4">
				<a href="editar.php" class="btn btn-secondary">Atualizar Registros</a>
				<a href="deletar.php" class="btn btn-danger">Deletar Registros</a>
			</div>
		</div>
	</body>
</html>