<?php
require 'db.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "<div class='alert alert-danger custom-alert'>ID inválido.</div>";
    exit;
}

$db = new DB();
$produto = $db->getId($_GET['id']);
if (!$produto) {
    echo "<div class='alert alert-warning custom-alert'>Produto não encontrado.</div>";
    exit;
}
?>

<div class="card custom-card">
    <div class="card-header custom-card-header">Editar Produto</div>
    <div class="card-body">
        <form method="POST" action="update.php" class="custom-form">
            <input type="hidden" name="id" value="<?= htmlspecialchars($produto['id']) ?>">
            <div class="mb-3">
                <label class="form-label">Produto</label>
                <input type="text" name="nome_produto" class="form-control custom-input" value="<?= htmlspecialchars($produto['nome_produto']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Preço</label>
                <input type="text" name="preco" class="form-control custom-input" value="<?= htmlspecialchars($produto['preco']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Descrição</label>
                <input type="text" name="descricao" class="form-control custom-input" value="<?= htmlspecialchars($produto['descricao']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Categoria</label>
                <input type="text" name="categoria" class="form-control custom-input" value="<?= htmlspecialchars($produto['categoria']) ?>" required>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary custom-btn">Atualizar</button>
                <a href="/Avaliacao/home.php" class="btn btn-secondary custom-btn">Cancelar</a>
            </div>
        </form>
    </div>
</div>

<style>
    /* Estilo geral do card */
    .custom-card {
        max-width: 700px;
        margin: 30px auto;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #ffffff;
    }

    .custom-card-header {
        background-color: #007bff;
        color: white;
        text-align: center;
        padding: 15px;
        font-size: 1.25rem;
        border-radius: 8px 8px 0 0;
    }

    /* Estilo dos inputs do formulário */
    .custom-input {
        border-radius: 5px;
        padding: 10px;
        border: 1px solid #ddd;
        font-size: 14px;
        transition: border-color 0.3s;
    }

    .custom-input:focus {
        border-color: #007bff;
        outline: none;
    }

    /* Estilo dos botões */
    .custom-btn {
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 14px;
        text-decoration: none;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
        margin-right: 10px;
    }

    .custom-btn:hover {
        background-color: #0056b3;
        transform: scale(1.05);
    }

    .custom-btn:active {
        background-color: #004085;
        transform: scale(0.98);
    }

    /* Estilo para a div de ações (botões Atualizar e Cancelar) */
    .form-actions {
        text-align: center;
        margin-top: 20px;
    }

    /* Estilo do alert (para erros ou sucesso) */
    .custom-alert {
        border-radius: 8px;
        margin: 20px 0;
        padding: 15px;
        text-align: center;
        font-size: 16px;
    }

    /* Estilos adicionais */
    .alert-danger {
        background-color: #f8d7da;
        color: #721c24;
        border-color: #f5c6cb;
    }

    .alert-warning {
        background-color: #fff3cd;
        color: #856404;
        border-color: #ffeeba;
    }

    /* Responsividade */
    @media (max-width: 768px) {
        .custom-card {
            padding: 15px;
            margin: 20px;
        }

        .custom-input, .custom-btn {
            font-size: 12px;
            padding: 8px 16px;
        }

        .custom-card-header {
            font-size: 1.1rem;
            padding: 12px;
        }
    }
</style>