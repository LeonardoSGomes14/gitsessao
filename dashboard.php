<?php

session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit;
}

echo "Bem-vindo, " . $_SESSION["usuario"] . ". Esta é a página de dashboard.";

?>


<h2>LISTA DE USUÁRIOS</h2>
<?php
require_once 'db.php';
require_once 'public/Controllers/RegController.php';
require_once 'public/Models/RegModel.php';

// Criar uma instância do modelo regModel
$regModel = new RegModel($pdo);

// Criar uma instância do controlador RegController e passar o modelo
$regController = new RegController($regModel);



//Atualizar usuário 
if (
    isset($_POST['atualizar_usuario']) &&
    isset($_POST['atualizar_email']) &&
    isset($_POST['atualizar_senha']) &&
    isset($_POST['id'])
) {
    $regModel->atualizarReg(
        $_POST['id'],
        $_POST['atualizar_usuario'],
        $_POST['atualizar_email'],
        $_POST['atualizar_senha'],
    );
}


// Exibir usuários - removido o trecho redundante
$regs = $regModel->listarReg();
?>

<!-- Exibir lista de usuários -->
<ul>
    <?php foreach ($regs as $reg) : ?>
        <li>
            nome: <?php echo $reg['usuario']; ?>
            Email: <?php echo $reg['email']; ?>
            Senha: <?php echo $reg['senha']; ?>
        </li>
    <?php endforeach; ?>



    <!-- atualizar dados -->
    <h2>Atualizar Dados do usuário</h2>
    <form method="post">
        <div class="cadastro-n">
            <select name="id">
                <?php foreach ($regs as $reg) : ?>
                    <option value="<?php echo $reg['id']; ?>">
                        <?php echo $reg['usuario']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <input type="text" name="atualizar_usuario" placeholder="Nome">
            <input type="text" name="atualizar_email" placeholder="Email">
            <input type="password" name="atualizar_senha" placeholder="Senha">
            <div class="inp"><input><button type="submit">Atualizar</button></input></div>
        </div>
    </form>

    </div>





    <h2>LISTA DE PRODUTOS</h2>
    <?php
    require_once 'db.php';
    require_once 'public/Controllers/ProdController.php';
    require_once 'public/Models/ProdModel.php';

    // Criar uma instância do modelo ProdModel
    $prodModel = new ProdModel($pdo);

    // Criar uma instância do controlador ProdController e passar o modelo
    $prodController = new ProdController($prodModel);



    //Atualizar usuário 
    if (
        isset($_POST['atualizar_nome']) &&
        isset($_POST['atualizar_quantia']) &&
        isset($_POST['atualizar_preco']) &&
        isset($_POST['id'])
    ) {
        $prodModel->atualizarProd(
            $_POST['id'],
            $_POST['atualizar_nome'],
            $_POST['atualizar_quantia'],
            $_POST['atualizar_preco'],
        );
    }


    // Exibir produtos- removido o trecho redundante
    $prods = $prodModel->listarProd();
    ?>

    <!-- Exibir lista de produtos -->
    <ul>
        <?php foreach ($prods as $prod) : ?>
            <li>
                nome: <?php echo $prod['nome']; ?>
                Estoque: <?php echo $prod['quantia']; ?>
                Preço: <?php echo $prod['preco']; ?>
            </li>
        <?php endforeach; ?>
    </ul>
    </div>


    <!-- atualizar dados -->
    <h2>Atualizar Dados do Produto</h2>
    <form method="post">
        <div class="cadastro-n">
            <select name="id">
                <?php foreach ($prods as $prod) : ?>
                    <option value="<?php echo $prod['id']; ?>">
                        <?php echo $prod['nome']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <input type="text" name="atualizar_nome" placeholder="Nome">
            <input type="text" name="atualizar_quantia" placeholder="Quantidade">
            <input type="text" name="atualizar_preco" placeholder="Preço">
            <div class="inp"><input><button type="submit">Atualizar</button></input></div>
        </div>
    </form>

    </div>
    <a href="logout.php">Sair</a>

    <a href="index.php">Index</a>

    </body>

    </html>