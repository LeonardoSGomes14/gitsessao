<?php

class RegModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    //Model para criar usuários
    public function criarReg($usuario, $email, $senha) {
        $sql = "INSERT INTO usuarios (usuario, email, senha)
        VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$usuario, $email, $senha]);
    }
    
//Model para listar usuários
public function listarReg() {
    $sql = "SELECT * FROM usuarios";
    $stmt = $this->pdo->query($sql);
    return $stmt->fetchALL(PDO:: FETCH_ASSOC);
}

//Model para atualizar usuários
public function 
atualizarReg($id, $usuario, $email, $senha) {
    $sql = "UPDATE usuarios SET usuario = ?, email = ?, senha = ?
    WHERE id = ?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$usuario, $email, $senha, $id]);
} 
    }
