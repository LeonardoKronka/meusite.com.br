<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="calcula_nota.php" method="post">
            <label for="nota">Digite sua nota:</label>
            <input type="number" id="nota" name="nota" required><br><br>
            <label for="disciplina">Disciplina:</label>
            <input type="text" name="disciplina" id="disciplina" required><br><br>
            <button type="submit">Consultar aprovação</button>
        </form>
    </div>
</body>
</html>