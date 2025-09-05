<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamada</title>
</head>
<body style="background-color: white;">
    <div style="text-align: left; font-family: Arial, sans-serif; background-color: blue; color: white; padding: 20px; border-radius: 10px; box-shadow: 0 0 5px rgba(0, 0, 0, 1); max-width: 400px; margin: auto;">
        <h2 style="text-align: center; color: #00ff11ff;">Registros da Chamada</h2>
            <?php 
                require_once 'funcao.php';
                listarchamada();
            ?>
    </div>
</body>
</html>