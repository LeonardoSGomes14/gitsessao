<?php

class ProdModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    //Model para criar produtos
    public function criarProd($nome, $quantia, $preco)
    {
        $sql = "INSERT INTO produtos (nome, quantia, preco)
        VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $quantia, $preco]);
    }


    //Model para listar produtos
    public function listarProd()
    {
        $sql = "SELECT * FROM produtos";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }

    //Model para atualizar produtos
    public function
    atualizarProd($id, $nome, $quantia, $preco)
    {
        $sql = "UPDATE produtos SET nome = ?, quantia = ?, preco = ?
    WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $quantia, $preco, $id]);
    }
}
