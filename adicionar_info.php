<?php
require 'Info.php';
require 'Gerenciador_info.php';

// Verifica se os dados do formulário foram enviados
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $brinquedo = $_POST['brinquedo'];
    $comida = $_POST['comida'];
    $local = $_POST['local'];


    // Cria um novo objeto Carro
    $carro = new Carro($brinquedo, $comida, $local,);

    // Gerencia o CRUD usando GerenciadorCarros
    $gerenciadorInfo = new GerenciadorInfo();
    $gerenciadorInfo->adicionarInfo($info);

    // Redireciona para a página principal
    header('Location: index.php');
    exit;
}
?>
