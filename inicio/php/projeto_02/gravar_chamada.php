<?php
//puxa os dados do formulário
    $nome=$_POST['nome'];
    $sala=$_POST['sala'];
    $rm=$_POST['rm'];
//chama a função para gravar os dados no arquivo
        require_once 'funcao.php';
        gravarChamada($nome, $sala, $rm);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamada Gravada!👌</title>
</head>
<body style="text-align: center; font-family: Arial, sans-serif; background-color: #f0f0f0; padding: 20px; border-radius: 10px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); max-width: 400px; margin: auto;">
    <div style="background-color: blue; padding: 20px; border-radius: 10px; box-shadow: 0 0 5px rgba(0, 0, 0, 1);">
        <!-- mensagem de sucesso -->
        <p style="color: #59ff00ff; font-weight: bold; font-size: 18px; margin-bottom: 20px;">
        ✅ Chamada de <?php echo $nome ?> gravada com sucesso!
        </p>
        <div style="display: flex; justify-content: space-around; margin-top: 20px;">
            <a href="index.php" 
            style="padding: 10px 15px; background-color: #ff0000ff; color: white; text-decoration: none; border-radius: 5px; box-shadow: 0 0 5px rgba(0, 0, 0, 1); font-weight: bold; transition: background 0.3s;">
            Registrar outro aluno</a>
            <a href="listar_chamada.php" 
            style="padding: 10px 15px; background-color: #00ff11ff; color: white; text-decoration: none; border-radius: 5px; box-shadow: 0 0 5px rgba(0, 0, 0, 1); font-weight: bold; transition: background 0.3s;">
            Ver lista</a>
        </div>
    </div>
</body>
</html>