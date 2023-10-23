<?php

class RegModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function criarReg($usuario, $email, $senha) {
        $sql = "INSERT INTO usuarios (usuario, email, senha)
        VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$usuario, $email, $senha]);
    }
        
    }



?>
