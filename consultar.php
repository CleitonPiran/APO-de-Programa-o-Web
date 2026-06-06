<?php
	$titulo = "Consultar Pessoas";
	require_once "utils/header.php";
?>

		<div class="corpo container mt-4">
			<h1 class="text-center">Lista de Pessoas</h1>
			<br><br>

			<table class="table table-striped table-bordered table-hover">
				<thead class="table-dark">
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>Idade</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					<?php
						require_once "PDO.php";
						$banco = new usePDO();
						$result = $banco->execSQL("SELECT * FROM pessoas");
						$vetor_resultado = $result->fetchAll();

						foreach ($vetor_resultado as $pessoa) {
							echo "<tr>
								<td>".$pessoa['id']."</td>
								<td>".$pessoa['nome']."</td>
								<td>".$pessoa['idade']."</td>
								<td>".$pessoa['email']."</td>
							</tr>";
						}
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>