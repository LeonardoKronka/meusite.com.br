<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto 2-Chamada</title>
</head>
<body>
    <div class="login-container">
    <form action="gravar_chamada.php" method="post" style="text-align: center; font-family: Arial, sans-serif; background-color: blue; padding: 20px; border-radius: 10px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.7); max-width: 400px; margin: auto;">
        <h2 style="text-align: center;">Registro chamada</h2>
        <label for="nome" style="color: white; font-weight: bold; display:block; margin-top: 10px;">Nome</label>
        <input type="text" id="nome" name="nome" required
                style="width: 50%; padding: 8px; border: 3px solid #000000ff; border-radius: 10px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.7);margin-top: 4px;"><br>
        
        <label for="sala" style="color: white; font-weight: bold; display:block; margin-top: 10px;">Sala</label>
        <input type="text" id="sala" name="sala" required
                style="width: 50%; padding: 8px; border: 3px solid #000000ff; border-radius: 10px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.7); margin-top: 4px;"><br>

        <label for="rm" style="color: white; font-weight: bold; display:block; margin-top: 10px;">R.M</label>
        <input type="number" id="rm" name="rm" required
                style="width: 50%; padding: 8px; border: 3px solid #000000ff; border-radius: 10px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.7); margin-top: 4px;"><br>
        
        <input type="submit" value="Registrar"
                style="margin-top: 15px; padding: 10px 20px; background-color: #00ff11ff; color: white; border: 1px solid black; border-radius: 5px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.7); cursor: pointer;">
    </form>
</body>
</html>