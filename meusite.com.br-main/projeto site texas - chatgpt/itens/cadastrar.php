<?php
require __DIR__ . '/../config.php';

$mensagem = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (!check_csrf($_POST['csrf'] ?? '')) {
    $mensagem = 'Token inválido. Atualize a página.';
  } else {
    $nome = trim($_POST['nome'] ?? '');
    $preco = (float)($_POST['preco'] ?? 0);
    $categoria = trim($_POST['categoria'] ?? '');
    $descricao = trim($_POST['descricao'] ?? '');
    $ativo = isset($_POST['ativo']) ? 1 : 0;

    if ($nome === '' || $preco <= 0) {
      $mensagem = 'Preencha nome e preço corretamente.';
    } else {
      $st = $pdo->prepare("INSERT INTO itens (nome, preco, categoria, descricao, ativo) 
                           VALUES (:n,:p,:c,:d,:a)");
      $st->execute([
        ':n'=>$nome, ':p'=>$preco, ':c'=>$categoria, ':d'=>$descricao, ':a'=>$ativo
      ]);
      $mensagem = 'Item cadastrado com sucesso!';
    }
  }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title>Cadastrar Item — Espetaria Texas</title>
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<header class="header">
  <div class="brand">Espetaria Texas</div>
  <div class="sub">Cadastro de Itens</div>
</header>

<nav class="nav">
  <a href="../index.php">Início</a>
  <a href="listar.php">Cardápio</a>
</nav>

<main class="container">
  <section class="card">
    <h2>Novo Item</h2>
    <?php if ($mensagem): ?><p class="notice"><?= htmlspecialchars($mensagem) ?></p><?php endif; ?>

    <form method="post">
      <input type="hidden" name="csrf" value="<?= csrf_token() ?>">

      <label>Nome*</label>
      <input class="input" type="text" name="nome" required placeholder="Ex.: Espetinho de Boi">

      <label>Preço (R$)*</label>
      <input class="input" type="number" name="preco" min="0" step="0.01" required placeholder="10.00">

      <label>Categoria</label>
      <input class="input" type="text" name="categoria" placeholder="Carne, Aves, Vegetariano...">

      <label>Descrição</label>
      <input class="input" type="text" name="descricao" placeholder="Descrição curta do item">

      <label><input type="checkbox" name="ativo" checked> Ativo no cardápio</label>
      <div style="margin-top:14px">
        <button class="btn" type="submit">Salvar</button>
      </div>
    </form>
  </section>
</main>

<footer class="footer">© <?= date('Y') ?> Espetaria Texas</footer>
</body>
</html>
