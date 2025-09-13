<?php
$nome = "Leonardo";
$idade = 17;
$frutas = ["Maçã", "Banana", "Laranja", "Uva"];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>PHP com if, for e CSS</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      padding: 20px;
      text-align: center;
    }
    .caixa {
      background: white;
      padding: 20px;
      border-radius: 10px;
      display: inline-block;
      box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }
    h1 {
      color: #0077cc;
    }
    ul {
      list-style: none;
      padding: 0;
    }
    li {
      background: #e0f0ff;
      margin: 5px 0;
      padding: 8px;
      border-radius: 5px;
    }
  </style>
</head>
<body>

  <div class="caixa">
    <h1>Olá, <?= $nome ?>!</h1>

    <?php if ($idade >= 18): ?>
      <p>Você é maior de idade.</p>
    <?php else: ?>
      <p>Você é menor de idade.</p>
    <?php endif; ?>

    <h2>Lista de frutas:</h2>
    <ul>
      <?php for ($i = 0; $i < count($frutas); $i++): ?>
        <li><?= $frutas[$i] ?></li>
      <?php endfor; ?>
    </ul>
  </div>

</body>
</html>
