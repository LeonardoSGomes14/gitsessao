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


}
    ?>  