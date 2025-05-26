<?php
require 'db.php';

if (
    !isset($_POST['id'], $_POST['nome_produto'], $_POST['preco'], $_POST['descricao'], $_POST['categoria']) ||
    !is_numeric($_POST['id']) ||
    empty(trim($_POST['nome_produto'])) ||
    empty(trim($_POST['preco'])) ||
    empty(trim($_POST['descricao'])) ||
    empty(trim($_POST['categoria']))
) {
    echo "Dados inválidos.";
    exit;
}

$db = new DB();
$db->updateProduto($_POST['id'], $_POST['nome_produto'], $_POST['preco'], $_POST['descricao'], $_POST['categoria']);
header("Location: /Avaliacao/home.php");
exit;

