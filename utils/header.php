<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo htmlspecialchars($titulo); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Home Apo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="inserir.php">Inserir Pessoa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="consultar.php">Consultar Pessoas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inserirforn.php">Inserir Fornecedor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="consultarforn.php">Consultar Fornecedor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inserirprod.php">Inserir Produto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="consultarprod.php">Consultar Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cesta.php">Cesta</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <?php if (isset($_SESSION["usuario_id"])): ?>
                        <li class="nav-item">
                            <span class="nav-link">Bem-vindo(a), <?php echo htmlspecialchars($_SESSION["usuario_nome"]); ?>!</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Sair</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>