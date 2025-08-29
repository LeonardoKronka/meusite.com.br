<?php 
    echo ""
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <h1 style="border: 5px solid aqua; padding: 10px;width: 400px; margin-left: 420px; text-align: center; color: red;">Bem vindo ao Meu Site! 👌</h1>
    <h2 style="text-align: center; color: blue;">Aqui você conhece um pouco mais sobre mim.</h2>
    <p>Conheça mais sobre meus projetos <a href="https://github.com/LeonardoKronka">aqui</a></p>
    <h1>Clique aqui para calcular sua nota</h1>
    <a href="http://localhost/meusite.com.br/formulario_nota/nota.php">Calcular Nota</a>
</body>
</html>

<?php 
    file_put_contents("log.txt", 
    "Usuario acessou em: " .
    date("d/m/Y H:i:s") .
    "\n", FILE_APPEND);
?>