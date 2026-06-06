<?php
session_start();

if (!isset($_SESSION["usuario_id"])) {
    header("location: login.php");
    exit();
}

$titulo = "Inserir Produto";
require_once "utils/header.php";
?>
<?php
	$titulo = "Cadastrar Produtos";
	require_once "utils/header.php";
?>
		<script type="text/javascript" src="js/script.js"></script>

		<div class="corpo container mt-4">
			<h1 class="text-center">Cadastro de Produtos</h1>
			<br><br>
			<form action="cadastraprod.php" method="POST" class="mx-auto" style="max-width: 500px;">
				<div class="mb-3">
					<label for="produto" class="form-label">Produto</label>
					<input type="text" name="produto" id="produto" class="form-control" onblur="validar_produto(this)">
				</div>
				<div class="mb-3">
					<label for="valor" class="form-label">Valor</label>
					<input type="number" name="valor" id="valor" class="form-control" step="0.01" min="0" required>
				</div>
				<div class="mb-3">
					<label for="fornproduto" class="form-label">Fornecedor do Produto</label>
					<input type="text" name="fornproduto" id="fornproduto" class="form-control">
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
				echo "<h3 class='text-center text-success'>Produto cadastrado com Sucesso</h3>";
			}
			?>

			<div class="text-center mt-4">
				<a href="editarprod.php" class="btn btn-secondary">Atualizar Produtos</a>
			</div>
		</div>
	</body>
</html>