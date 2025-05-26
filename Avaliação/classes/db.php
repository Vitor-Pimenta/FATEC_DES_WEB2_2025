<?php

class DB {
    private $host = "localhost";
    private $dbname = "artesanato_db";
    private $username = "root";
    private $password = "";
    private $pdo;

    public function __construct() {
        try {
            $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=utf8";
            $this->pdo = new PDO($dsn, $this->username, $this->password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        } catch (PDOException $e) {
            die("Erro ao conectar: " . $e->getMessage());
        }
    }

    public function __destruct() {
        $this->pdo = null; // Encerra a conexão
    }

    private function execute($sql, $params = []) {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

    public function getAll() {
        return $this->execute("SELECT * FROM produtos_artesanais")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getId($id) {
        return $this->execute("SELECT * FROM produtos_artesanais WHERE id = ?", [$id])->fetch(PDO::FETCH_ASSOC);
    }
   

    public function insertProduto($nome_produto, $preco, $descricao, $categoria) {
        $this->execute("INSERT INTO produtos_artesanais (nome_produto, preco, descricao, categoria) VALUES (?, ?, ?, ?)", [
            $nome_produto, $preco, $descricao, $categoria,
        ]);
    }

    public function updateProduto($id, $nome_produto, $preco, $descricao, $categoria) {
        $this->execute("UPDATE produtos_artesanais SET nome_produto = ?, preco = ?, descricao = ?, categoria = ? WHERE id = ?", [
            $nome_produto, $preco, $descricao, $categoria, $id
        ]);
    }

    public function deleteProduto($id) {
        $this->execute("DELETE FROM produtos_artesanais WHERE id = ?", [$id]);
    }
}