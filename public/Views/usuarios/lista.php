<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>
    <h1>Lista de Usuários</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
        </tr>

        <?php foreach ($regs as $reg): ?>
           
            <tr>
                <td><?php echo $reg['id']; ?></td>
                <td><?php echo $reg['usuario']; ?></td>
                <td><?php echo $reg['email']; ?></td>
                <td><?php echo $reg['senha']; ?></td>
            </tr>

            <?php endforeach; ?>
            
    </table>
</body>
</html>