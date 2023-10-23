<?php
require_once 'public/Models/RegModel.php';


class RegController {
    private $regModel;

public function __construct($pdo) {
        $this->regModel = new RegModel($pdo);
    }

    public function criarReg($usuario, $email, $senha) {
        $this->regModel->criarReg($usuario, $email, $senha);
    }

    public function listarReg() {
        return $this->regModel->listarReg();
    }

    public function exibirListarReg() {
        $prod = $this->regModel->listarReg();
        include 'views/usuarios/lista.php';
    }
    
    public function atualizarReg($id, $usuario, $email, $senha) {
        $this->regModel->atualizarReg($id, $usuario, $email, $senha);
    }
}
