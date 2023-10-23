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


}
    ?>  