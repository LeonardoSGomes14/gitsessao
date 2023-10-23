<?php
require_once 'public/Models/ProdModel.php';


class ProdController {
    private $prodModel;

public function __construct($pdo) {
        $this->prodModel = new prodModel($pdo);
    }

    public function criarProd($nome, $quantia, $preco) {
        $this->prodModel->criarProd($nome, $quantia, $preco);
    }

    public function listarProd() {
        return $this->prodModel->listarProd();
    }

    public function exibirListaProd() {
        $prod = $this->prodModel->listarProd();
        include 'views/produtos/lista.php';
    }
    
    public function atualizarProd($id, $nome, $quantia, $preco) {
        $this->prodModel->atualizarProd($id, $nome, $quantia, $preco);
    }

    
}
