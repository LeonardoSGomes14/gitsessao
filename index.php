<?php
require_once 'db.php';
require_once 'public/Controllers/RegController.php';

$regController = new RegController($pdo);

if (
    isset($_POST['usuario']) &&
    isset($_POST['email']) &&
    isset($_POST['senha'])
) {
    $regController->criarReg($_POST['usuario'], $_POST['email'], $_POST['senha']);
}
?>

<?php
require_once 'db.php';
require_once 'public/Controllers/ProdController.php';

$prodController = new ProdController($pdo);

if (
    isset($_POST['nome']) &&
    isset($_POST['quantia']) &&
    isset($_POST['preco'])
) {
    $prodController->criarProd($_POST['nome'], $_POST['quantia'], $_POST['preco']);
}

?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessão</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section>

        <h1>REGISTRO DE USUÁRIOS</h1>

        <form method="post">
            <input type="text" name="usuario" placeholder="Nome de Usuário" required>
            <input type="email" name="email" placeholder="email" required>
            <input type="password" name="senha" placeholder="senha" required>
            <button type="submit">Registrar-se</button>
        </form>


        <h1>REGISTRO DE PRODUTOS</h1>

        <form method="post">
            <input type="text" name="nome" placeholder="Nome do Produto" required>
            <input type="text" name="quantia" placeholder="Estoque" required>
            <input type="text" name="preco" placeholder="Preço" required>
            <button type="submit">Registrar Produto</button>
        </form>


        <div class="details_index">
            <details>
                <summary> OUTRAS PÁGINAS </summary>
                <ul>
                    <li><a href="login.php">Realizar Login</a></li>
                    <li><a href="dashboard.php">Dashboard</a></li>
                </ul>

            </details>
        </div>

    </section>
</body>

</html>