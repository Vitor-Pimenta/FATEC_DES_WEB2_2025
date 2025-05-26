<?php
require 'db.php';

$db = new DB();
$produto = $db->getAll();
?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3">Escolha o produto que deseja remover</h1>
</div>

<table class="table table-striped table-bordered custom-table">
    <thead class="table-dark">
        <tr>
            <th>Nome do Produto</th>
            <th>Preço</th>
            <th>Descrição</th>
            <th>Categoria</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($produto as $produto): ?>
        <tr>
            <td><?= htmlspecialchars($produto['nome_produto']) ?></td>
            <td><?= htmlspecialchars($produto['preco']) ?></td>
            <td><?= htmlspecialchars($produto['descricao']) ?></td>
            <td><?= htmlspecialchars($produto['categoria']) ?></td>
            <td class="actions">
                <a href="excluir.php?id=<?= $produto['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<a href="/Avaliacao/home.php" class="btn btn-secondary custom-btn">Voltar</a>

<style>
    /* Estilo geral para a tabela */
    .custom-table {
        border-radius: 10px;
        border-collapse: separate;
        border-spacing: 0 10px; /* espaçamento entre as linhas */
        width: 100%;
        margin-top: 20px;
    }

    .custom-table th, .custom-table td {
        padding: 15px;
        text-align: center;
        border-radius: 8px;
    }

    .custom-table th {
        background-color: #343a40;
        color: white;
    }

    .custom-table tbody tr:nth-child(odd) {
        background-color: #f9f9f9;
    }

    .custom-table tbody tr:hover {
        background-color: #e9ecef;
    }

    .custom-table .actions a {
        margin: 0 5px;
        font-size: 14px;
    }

    /* Estilo para os botões Editar e Excluir */
    .btn {
        border-radius: 5px;
        padding: 8px 20px;
        font-size: 14px;
        text-decoration: none;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    /* Botões Editar */
    .btn-warning {
        background-color: #ffc107;
        color: white;
    }

    .btn-warning:hover {
        background-color: #e0a800;
        transform: scale(1.05);
    }

    .btn-warning:active {
        background-color: #d39e00;
        transform: scale(0.98);
    }

    /* Botões Excluir */
    .btn-danger {
        background-color: #dc3545;
        color: white;
    }

    .btn-danger:hover {
        background-color: #c82333;
        transform: scale(1.05);
    }

    .btn-danger:active {
        background-color: #bd2130;
        transform: scale(0.98);
    }

    /* Estilo do botão Voltar */
    .custom-btn {
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 14px;
        text-decoration: none;
        transition: background-color 0.3s ease, transform 0.2s ease;
        margin-top: 20px;
        display: inline-block;
    }

    .custom-btn:hover {
        background-color: #0056b3;
        transform: scale(1.05);
    }

    .custom-btn:active {
        background-color: #004085;
        transform: scale(0.98);
    }

    /* Estilos adicionais */
    .table-bordered {
        border: 1px solid #ddd;
    }

    .table-bordered th, .table-bordered td {
        border: 1px solid #ddd;
    }

    /* Adicionando sombra leve à tabela */
    .table {
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, 0.1);
    }

    /* Responsividade */
    @media (max-width: 768px) {
        .custom-table th, .custom-table td {
            font-size: 12px;
            padding: 8px;
        }

        .custom-btn, .btn {
            font-size: 12px;
            padding: 8px 15px;
        }
    }
</style>