<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <style>
        /* Estilo do corpo da página */
        body {
            font-family: Arial, sans-serif;
            background-color: white; /* fundo cinza claro */
            display: flex;
            justify-content: center; /* centraliza horizontalmente */
            align-items: center;     /* centraliza verticalmente */
            height: 100vh;           /* ocupa 100% da altura da tela */
        }

        /* Caixa de login */
        .login-box {
            background: white;
            padding: 20px;
            border-radius: 8px; /* bordas arredondadas */
            box-shadow: 0 0 10px black; /* sombra */
            text-align: center;
            width: 300px;
        }

        /* Título dentro da caixa */
        .login-box h2 {
            margin-bottom: 20px;
            color: #333;
        }

        /* Campos de input */
        .login-box input {
            width: 90%;
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Botão de login */
        .login-box button {
            width: 95%;
            padding: 10px;
            background: #007bff;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        /* Botão ao passar o mouse */
        .login-box button:hover {
            background: #0056b3;
        }

        /* Mensagem de erro */
        .erro {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <input type="text" name="usuario" placeholder="Usuário" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>

        <?php 
            if (isset($_GET['msg'])) {
                echo "<p class='erro'>". htmlspecialchars($_GET['msg'])."</p>";
            }
        ?>
    </div>
</body>
</html>
