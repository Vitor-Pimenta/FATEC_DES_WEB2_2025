<?php
require 'db.php';
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "ID inválido para exclusão.";
    exit;
}
$db = new DB();
$db->deleteProduto($_GET['id']);
header("Location: /Avaliacao/home.php");
exit;