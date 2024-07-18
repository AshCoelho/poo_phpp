<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parquinho</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">
        <div class="container-um">
            <h1>Parquinho</h1>
            <form action="adicionar_informacao.php" method="POST">
                <label for="brinquedo">Brinquedo:</label>
                <input type="text" id="brinquedo" name="brinquedo" required><br><br>
                
                <label for="comida">Comida:</label>
                <input type="text" id="comida" name="comida" required><br><br>
                
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required><br><br>

                <label for="dia">Data:</label>
                <input type="date" id="dia" name="dia" required><br><br>


                <input type="submit" value="Adicionar Informação">
            </form>
        </div>
            <div>
            <h2 id="titulo">Lista de Informação do Parquinho</h2>
            <div id="lista-informacoes">
                <?php include 'listar_informacoes.php'; ?>
            </div>
        </div>
    </section>
</body>
</html>
