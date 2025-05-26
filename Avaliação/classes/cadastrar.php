<div class="card custom-card">
    <div class="card-header custom-card-header">Novo Produto</div>
    <div class="card-body custom-card-body">
        <form method="POST" action="enviar.php" class="form-container">
            <div class="mb-3">
                <label class="form-label">Nome do Produto</label>
                <input type="text" name="nome_produto" class="form-control custom-input" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Preço</label>
                <input type="text" name="preco" class="form-control custom-input" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Descrição</label>
                <input type="text" name="descricao" class="form-control custom-input" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Categoria</label>
                <input type="text" name="categoria" class="form-control custom-input" required>
            </div>

            <div class="button-group">
                <button type="submit" class="btn btn-success custom-btn">Enviar</button>
                <a href="/Avaliacao/home.php" class="btn btn-secondary custom-btn">Cancelar</a>
            </div>
        </form>
    </div>
</div>

<!-- Estilo dentro do código -->
<style>
    /* Estilo para o card */
    .custom-card {
        max-width: 500px;
        margin: 30px auto;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #ffffff;
    }

    .custom-card-header {
        background-color: #007bff;
        color: #ffffff;
        text-align: center;
        padding: 15px;
        font-size: 1.25rem;
        border-radius: 8px 8px 0 0;
    }

    .custom-card-body {
        padding: 30px;
    }

    /* Centralizar o formulário usando Flexbox */
    .form-container {
        display: flex;
        flex-direction: column;
        align-items: center; /* Alinha os itens no centro horizontalmente */
        justify-content: center; /* Alinha os itens no centro verticalmente */
    }

    /* Estilo dos campos de entrada */
    .custom-input {
        border-radius: 8px;
        padding: 10px;
        border: 1px solid #ddd;
        transition: border-color 0.3s ease;
        width: 100%;
        max-width: 400px; /* Limita a largura máxima */
        margin-bottom: 15px;
    }

    .custom-input:focus {
        border-color: #007bff;
        outline: none;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    /* Estilo dos botões */
    .custom-btn {
        width: 48%;
        padding: 10px;
        font-size: 16px;
        border-radius: 5px;
        margin: 10px 1%;
        text-align: center;
        transition: background-color 0.3s, transform 0.2s;
    }

    .custom-btn:hover {
        background-color: #0056b3;
        transform: scale(1.05);
    }

    .custom-btn:active {
        background-color: #004085;
        transform: scale(0.98);
    }

    .custom-btn:focus {
        outline: none;
    }

    /* Responsividade: para telas menores */
    @media (max-width: 576px) {
        .custom-card {
            margin: 20px;
            padding: 15px;
        }

        .custom-btn {
            width: 100%;
            margin-bottom: 10px;
        }
    }
</style>