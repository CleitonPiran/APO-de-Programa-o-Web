<?php
session_start();

if (!isset($_SESSION["usuario_id"])) {
    header("location: login.php");
    exit();
}

$titulo = "Consultar Produtos";
require_once "utils/header.php";
?>
<?php
	$titulo = "Consultar Produtos";
	require_once "utils/header.php";
?>

		<div class="corpo container mt-4">
			<h1 class="text-center">Lista de Produtos</h1>
			<br><br>

			<form action="cesta.php" method="POST">
				<table class="table table-striped table-bordered table-hover">
					<thead class="table-dark">
						<tr>
							<th>Selecionar</th>
							<th>ID</th>
							<th>Produto</th>
							<th>Valor</th>
							<th>Fornecedor do Produto</th>
						</tr>
					</thead>
					<tbody>
						<?php
							require_once "PDO.php";
							$banco = new usePDO();
							$result = $banco->execSQL("SELECT * FROM produtos");
							$vetor_resultado = $result->fetchAll();

							foreach ($vetor_resultado as $produto) {
								echo "<tr>
									<td><input type='checkbox' name='produtos[]' value='".$produto['id']."'></td>
									<td>".$produto['id']."</td>
									<td>".$produto['produto']."</td>
									<td>R$ ".number_format($produto['valor'], 2, ',', '.')."</td>
									<td>".$produto['fornproduto']."</td>
								</tr>";
							}
						?>
					</tbody>
				</table>
				<br>
				<button type="submit" class="btn btn-primary">Adicionar à Cesta</button>
			</form>
		</div>
	</body>
</html>