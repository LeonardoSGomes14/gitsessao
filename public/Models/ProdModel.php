<?php

class ProdModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function criarProd($nome, $quantia, $preco) {
        $sql = "INSERT INTO produtos (nome, quantia, preco)
        VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $quantia, $preco]);
    }
        
    }



?>
