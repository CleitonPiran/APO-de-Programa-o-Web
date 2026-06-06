<?php
	$titulo = "Consultar Fornecedor";
	require_once "utils/header.php";
?>

		<div class="corpo container mt-4">
			<h1 class="text-center">Lista de Fornecedores</h1>
			<br><br>

			<table class="table table-striped table-bordered table-hover">
				<thead class="table-dark">
					<tr>
						<th>ID</th>
						<th>Fornecedor</th>
						<th>Telefone</th>
						<th>Cidade</th>
						<th>Produto Fornecido</th>
					</tr>
				</thead>
				<tbody>
					<?php
						require_once "PDO.php";
						$banco = new usePDO();
						$result = $banco->execSQL("SELECT * FROM fornecedores");
						$vetor_resultado = $result->fetchAll();

						foreach ($vetor_resultado as $fornecedor) {
							echo "<tr>
								<td>".$fornecedor['id']."</td>
								<td>".$fornecedor['fornecedor']."</td>
								<td>".$fornecedor['telefone']."</td>
								<td>".$fornecedor['cidade']."</td>
								<td>".$fornecedor['produtoforn']."</td>
							</tr>";
						}
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>