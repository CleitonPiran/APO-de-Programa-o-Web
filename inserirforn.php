<?php
session_start();

if (!isset($_SESSION["usuario_id"])) {
    header("location: login.php");
    exit();
}

$titulo = "Inserir Fornecedor";
require_once "utils/header.php";
?>
<?php
	$titulo = "Cadastrar Fornecedores";
	require_once "utils/header.php";
?>
		<script type="text/javascript" src="js/script.js"></script>

		<div class="corpo container mt-4">
			<h1 class="text-center">Cadastro de Fornecedores</h1>
			<br><br>
			<form action="cadastraforn.php" method="POST" class="mx-auto" style="max-width: 500px;">
				<div class="mb-3">
					<label for="fornecedor" class="form-label">Fornecedor</label>
					<input type="text" name="fornecedor" id="fornecedor" class="form-control" onblur="validar_fornecedor(this)">
				</div>
				<div class="mb-3">
					<label for="telefone" class="form-label">Telefone</label>
					<input type="text" name="telefone" id="telefone" class="form-control">
				</div>
				<div class="mb-3">
					<label for="cidade" class="form-label">Cidade</label>
					<input type="text" name="cidade" id="cidade" class="form-control">
				</div>
				<div class="mb-3">
					<label for="produtoforn" class="form-label">Produto Fornecido</label>
					<input type="text" name="produtoforn" id="produtoforn" class="form-control">
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
				echo "<h3 class='text-center text-success'>Fornecedor cadastrado com Sucesso</h3>";
			}
			?>

			<div class="text-center mt-4">
				<a href="editarforn.php" class="btn btn-secondary">Atualizar Fornecedores</a>
			</div>
		</div>
	</body>
</html>