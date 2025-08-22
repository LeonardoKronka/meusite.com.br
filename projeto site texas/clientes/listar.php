<?php
require __DIR__ . '/../config.php';
$clientes = $pdo->query("SELECT * FROM clientes ORDER BY criado_em DESC")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title>Clientes — Espetaria Texas</title>
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<header class="header">
  <div class="brand">Espetaria Texas</div>
  <div class="sub">Lista de Clientes</div>
</header>

<nav class="nav">
  <a href="../index.php">Início</a>
  <a href="cadastrar.php">Cadastrar Cliente</a>
</nav>

<main class="container">
  <section class="card">
    <h2>Clientes (<?= count($clientes) ?>)</h2>
    <div style="overflow-x:auto;">
      <table class="table">
        <thead>
          <tr>
            <th>#</th><th>Nome</th><th>Telefone</th><th>Email</th><th>Criado em</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($clientes as $c): ?>
          <tr>
            <td><?= $c['id'] ?></td>
            <td><?= htmlspecialchars($c['nome']) ?></td>
            <td><?= htmlspecialchars($c['telefone']) ?></td>
            <td><?= htmlspecialchars($c['email']) ?></td>
            <td><span class="badge"><?= date('d/m/Y H:i', strtotime($c['criado_em'])) ?></span></td>
          </tr>
        <?php endforeach; ?>
        <?php if (!count($clientes)): ?>
          <tr><td colspan="5">Nenhum cliente cadastrado ainda.</td></tr>
        <?php endif; ?>
        </tbody>
      </table>
    </div>
  </section>
</main>

<footer class="footer">© <?= date('Y') ?> Espetaria Texas</footer>
</body>
</html>
