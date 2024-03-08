<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Clientes</title>
</head>
<body>
    <h1>Listagem de Clientes</h1>
    <?php if (!empty($clientes)) : ?>
        <ul>
            <?php foreach ($clientes as $cliente) : ?>
                <li><?php echo $cliente['nome']; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>Nenhum cliente encontrado.</p>
    <?php endif; ?>
</body>
</html>
