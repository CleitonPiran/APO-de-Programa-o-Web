<?php
	$titulo = "Cesta de Produtos";
	require_once "utils/header.php";

	if (isset($_POST['produtos']) && !empty($_POST['produtos'])) {
		$ids_produtos = $_POST['produtos'];

		require_once "PDO.php";
		$banco = new usePDO();

		$placeholders = implode(',', array_fill(0, count($ids_produtos), '?'));
		$sql = "SELECT * FROM produtos WHERE id IN ($placeholders)";
		$result = $banco->execSQL($sql, $ids_produtos);
		$produtos_selecionados = $result->fetchAll();

		$valor_total = 0;
		foreach ($produtos_selecionados as $produto) {
			$valor_total += (float) $produto['valor'];
		}

		$quantidade_produtos = count($produtos_selecionados);
	} else {
		$produtos_selecionados = [];
		$valor_total = 0;
		$quantidade_produtos = 0;
	}
?>

		<div class="corpo container mt-4">
			<h1 class="text-center">Cesta de Produtos</h1>
			<br><br>

			<?php if (!empty($produtos_selecionados)): ?>
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<thead class="table-dark">
							<tr>
								<th>Produto</th>
								<th>Valor</th>
								<th>Fornecedor do Produto</th>
							</tr>
						</thead>
						<tbody>
							<?php
								foreach ($produtos_selecionados as $produto) {
									$valor_formatado = number_format((float) $produto['valor'], 2, ',', '.');
									echo "<tr>
										<td>".$produto['produto']."</td>
										<td>R$ ".$valor_formatado."</td>
										<td>".$produto['fornproduto']."</td>
									</tr>";
								}
							?>
						</tbody>
					</table>
				</div>
				<br>
				<h3 class="text-success">Quantidade de Produtos: <?php echo $quantidade_produtos; ?></h3>
				<h3 class="text-primary">Valor Total: R$ <?php echo number_format($valor_total, 2, ',', '.'); ?></h3>
			<?php else: ?>
				<p class="text-center">Nenhum produto selecionado.</p>
			<?php endif; ?>

			<a href="consultarprod.php" class="btn btn-secondary mt-3">
    <i class="fas fa-arrow-left"></i> Voltar
</a>
		</div>
	</body>
</html>