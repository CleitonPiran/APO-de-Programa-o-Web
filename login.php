<?php
$titulo = "Login";
require_once "utils/header.php";
?>

<div class="corpo container mt-4">
    <h1 class="text-center">Login</h1>
    <br><br>
    <form action="processalogin.php" method="POST" class="mx-auto" style="max-width: 500px;">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>

    <h3 id="msg_erro" class="text-center text-danger mt-3">
        <?php
        if (isset($_GET["erro"])) {
            echo htmlspecialchars($_GET["erro"]);
        }
        ?>
    </h3>
</div>