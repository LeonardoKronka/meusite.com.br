<?php
require __DIR__ . '/../config.php';
$itens = $pdo->query("SELECT * FROM itens ORDER BY ativo DESC, nome ASC")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title>Cardápio — Espetaria Texas</title>
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<header class="header">
  <div class="brand">Espetaria Texas</div>
  <div class="sub">Cardápio</div>
</header>

<nav class="nav">
  <a href="../index.php">Início</a>
  <a href="cadastrar.php">Cadastrar Item</a>
</nav>

<main class="container">
  <section class="card">
    <h2>Itens do Cardápio (<?= count($itens) ?>)</h2>
    <div style="overflow-x:auto;">
      <table class="table">
        <thead>
          <tr>
            <th>#</th><th>Nome</th><th>Categoria</th><th>Preço</th><th>Status</th><th>Criado em</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($itens as $i): ?>
          <tr>
            <td><?= $i['id'] ?></td>
            <td><?= htmlspecialchars($i['nome']) ?></td>
            <td><?= htmlspecialchars($i['categoria']) ?></td>
            <td>R$ <?= number_format($i['preco'], 2, ',', '.') ?></td>
            <td><?= $i['ativo'] ? '<span class="badge">Ativo</span>' : '<span class="badge">Inativo</span>' ?></td>
            <td><span class="badge"><?= date('d/m/Y H:i', strtotime($i['criado_em'])) ?></span></td>
          </tr>
        <?php endforeach; ?>
        <?php if (!count($itens)): ?>
          <tr><td colspan="6">Nenhum item cadastrado ainda.</td></tr>
        <?php endif; ?>
        </tbody>
      </table>
    </div>
  </section>
</main>

<footer class="footer">© <?= date('Y') ?> Espetaria Texas</footer>
</body>
</html>
