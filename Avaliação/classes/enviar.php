<?php
require 'db.php';
$db = new DB();

if (
    !isset($_POST['nome_produto'], $_POST['preco'], $_POST['descricao'], $_POST['categoria']) ||
    empty(trim($_POST['nome_produto'])) ||
    empty(trim($_POST['preco'])) ||
    empty(trim($_POST['descricao'])) ||
    empty(trim($_POST['categoria']))

) {
    echo "Todos os campos são obrigatórios.";
    exit;
}
$db->insertProduto($_POST['nome_produto'], $_POST['preco'], $_POST['descricao'], $_POST['categoria']);
header("Location: /Avaliacao/home.php");
exit;