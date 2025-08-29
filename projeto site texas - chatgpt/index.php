<?php require __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title>Espetaria Texas — Painel</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<header class="header">
  <div class="brand">Espetaria Texas</div>
  <div class="sub">Churrasco na brasa • Sabor raiz • Atendimento de família</div>
</header>

<nav class="nav">
  <a href="index.php">Início</a>
  <a href="clientes/cadastrar.php">Cadastrar Cliente</a>
  <a href="clientes/listar.php">Listar Clientes</a>
  <a href="itens/cadastrar.php">Cadastrar Item</a>
  <a href="itens/listar.php">Cardápio</a>
</nav>

<main class="container grid grid-2">
  <section class="card">
    <h2>Bem-vindo(a)!</h2>
    <p>Use o menu para cadastrar novos <strong>clientes</strong> e gerenciar os <strong>itens do cardápio</strong>.</p>
    <p class="notice">Dica: este é um modelo de estudo. Depois você pode evoluir para login/CRUD completo.</p>
  </section>

  <section class="card">
    <h2>Atalhos rápidos</h2>
    <p>
      <a class="btn" href="clientes/cadastrar.php">+ Cliente</a>
      <a class="btn secondary" href="itens/cadastrar.php">+ Item</a>
    </p>
  </section>
</main>

<footer class="footer">© <?= date('Y') ?> Espetaria Texas. Feito com ♥ e PHP.</footer>
</body>
</html>
