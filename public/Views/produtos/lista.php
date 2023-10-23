<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Lista de Produtos em estoque</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Quantia</th>
            <th>Preço</th>
        </tr>

        <?php foreach ($prods as $prod): ?>
           
            <tr>
                <td><?php echo $prod['id']; ?></td>
                <td><?php echo $prod['nome']; ?></td>
                <td><?php echo $prod['quantia']; ?></td>
                <td><?php echo $prod['preco']; ?></td>
            </tr>

            <?php endforeach; ?>
            
    </table>
</body>
</html>