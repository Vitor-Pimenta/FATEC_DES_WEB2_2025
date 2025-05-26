<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Lojinha</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #f0f4ff, #ffffff);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        background-color: #ffffff;
        padding: 50px 40px;
        border-radius: 16px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 420px;
        text-align: center;
    }

    .textlogin {
        font-size: 1.8rem;
        color: #1e3799;
        margin-bottom: 30px;
    }

    form label {
        display: block;
        text-align: left;
        font-weight: 600;
        margin-bottom: 6px;
        color: #34495e;
    }

    form input[type="text"],
    form input[type="password"] {
        width: 100%;
        padding: 14px;
        margin-bottom: 20px;
        border: 1px solid #dce1e7;
        border-radius: 10px;
        font-size: 1rem;
        transition: border-color 0.3s ease;
    }

    form input[type="text"]:focus,
    form input[type="password"]:focus {
        border-color: #1e3799;
        outline: none;
    }

    .botaoentrar {
        background-color: #1e3799;
        color: #ffffff;
        border: none;
        padding: 14px;
        font-size: 1rem;
        border-radius: 10px;
        cursor: pointer;
        width: 100%;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .botaoentrar:hover {
        background-color: #0c2461;
        transform: scale(1.03);
    }
</style>
</head>
<body>
    <div class="container">
        <h2 class="textlogin">Login</h2>
        <form action="login.php" method="POST">
            <label for="login">Login:</label>
            <input type="text" id="login" name="login" placeholder="Insira seu login" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" placeholder="Insira sua senha" required>

            <input class="botaoentrar" type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>