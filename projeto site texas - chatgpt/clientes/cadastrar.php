<?php
require __DIR__ . '/../config.php';

$mensagem = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (!check_csrf($_POST['csrf'] ?? '')) {
    $mensagem = 'Token inválido. Atualize a página.';
  } else {
    $nome = trim($_POST['nome'] ?? '');
    $telefone = trim($_POST['telefone'] ?? '');
    $email = trim($_POST['email'] ?? '');

    if ($nome === '') {
      $mensagem = 'Informe o nome do cliente.';
    } else {
      $st = $pdo->prepare("INSERT INTO clientes (nome, telefone, email) VALUES (:n, :t, :e)");
      $st->execute([':n'=>$nome, ':t'=>$telefone, ':e'=>$email]);
      $mensagem = 'Cliente cadastrado com sucesso!';
    }
  }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title>Cadastrar Cliente — Espetaria Texas</title>
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<header class="header">
  <div class="brand">Espetaria Texas</div>
  <div class="sub">Cadastro de Clientes</div>
</header>

<nav class="nav">
  <a href="../index.php">Início</a>
  <a href="listar.php">Listar Clientes</a>
</nav>

<main class="container">
  <section class="card">
    <h2>Novo Cliente</h2>
    <?php if ($mensagem): ?>
      <p class="notice"><?= htmlspecialchars($mensagem) ?></p>
    <?php endif; ?>
    <form method="post" autocomplete="on">
      <input type="hidden" name="csrf" value="<?= csrf_token() ?>">
      <label>Nome*</label>
      <input class="input" type="text" name="nome" required placeholder="Ex.: Maria Silva">

      <label>Telefone</label>
      <input class="input" type="tel" name="telefone" placeholder="(11) 9 9999-9999">

      <label>E-mail</label>
      <input class="input" type="email" name="email" placeholder="maria@email.com">

      <button class="btn" type="submit">Salvar</button>
    </form>
  </section>
</main>

<footer class="footer">© <?= date('Y') ?> Espetaria Texas</footer>
</body>
</html>
