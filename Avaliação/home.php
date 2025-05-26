<?php
require('classes/login.php');
$validador = new Login();
$validador->verificar_logado();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lojinha - Cadastro de Produtos</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #f0f4ff, #ffffff);
        color: #2c3e50;
    }

    header {
        background-color: #1e3799;
        padding: 25px 0;
        text-align: center;
        color: #ecf0f1;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    header h1 {
        font-size: 2rem;
        margin: 0;
    }

    main {
        padding: 60px 20px;
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
    }

    main h2 {
        font-size: 1.8rem;
        margin-bottom: 30px;
        color: #34495e;
    }

    .btn-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        margin-top: 40px;
    }

    a.button {
        background: #1e3799;
        color: #fff;
        text-decoration: none;
        padding: 14px 28px;
        border-radius: 12px;
        font-size: 1rem;
        box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }

    a.button:hover {
        background-color: #0c2461;
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }

    footer {
        text-align: center;
        padding: 30px 0;
        background-color: #f8f9fa;
        color: #7f8c8d;
        font-size: 0.9rem;
        margin-top: 60px;
        border-top: 1px solid #e0e0e0;
    }
</style>
</head>
<body>

    <header>
        <h1>Cadastro de Produtos da Lojinha</h1>
    </header>

    <main>
        <h2>Bem-vindo(a), Lojista!</h2>

        <div class="btn-container">
            <a href="classes/cadastrar.php" class="button">Cadastrar Produto</a>
            <a href="classes/visualizar.php" class="button">Visualizar Produtos</a>
            <a href="classes/remover.php" class="button">Remover Produto</a>
            <a href="login.php" class="button">Logout</a>
        </div>
    </main>

    <footer>
        &copy; 2025 Lojinha Artesanal - Fatec Araras