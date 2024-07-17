<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parquinho</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>arquinho</h1>
    <form action="adicionar_info.php" method="POST">
        <label for="brinquedo">Brinquedo:</label>
        <input type="text" id="brinquedo" name="brinquedo" required><br><br>
        
        <label for="comida">Comida:</label>
        <input type="text" id="comida" name="comida" required><br><br>
        
        <label for="local">Local:</label>
        <input type="number" id="local" name="local" required><br><br>

        <input type="submit" value="Adicionar Informações">
    </form>
    <h2>Lista de Carros</h2>
    <div id="lista-info">
        <?php include 'listar_info.php'; ?>
    </div>
</body>
</html>
