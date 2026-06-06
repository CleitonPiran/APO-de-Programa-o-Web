<?php
	$titulo = "Deletar Pessoas";
	require_once "utils/header.php";
?>
		<div class="corpo">
			<h1>Deletar Pessoas</h1>
			<br><br>
			<form action="processadelete.php" method="POST">
				<label>Id</label>
				<input type="number" name="id">
				<input type="submit" value="Deletar">
			</form>

			<h3 id="msg_erro" style="color:red"></h3>
			<?php
			if (isset($_GET["sucesso"])){
				echo "<h3>Registro Deletado com Sucesso</h3>";
			}
			?>
		</div>
	</body>
</html>