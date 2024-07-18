<?php
require 'Informacao.php';
require 'GerenciadorInformacoes.php';

// Verifica se os dados do formulário foram enviados
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $brinquedo = $_POST['brinquedo'];
    $comida = $_POST['comida'];
    $endereco = $_POST['endereco'];
    $dia = $_POST['dia'];

    // Cria um novo objeto Carro
    $informacao = new Informacao($brinquedo, $comida, $endereco, $dia);

    // Gerencia o CRUD usando GerenciadorCarros
    $gerenciadorInformacoes = new GerenciadorInformacoes();
    $gerenciadorInformacoes->adicionarInformacao($informacao);

    // Redireciona para a página principal
    header('Location: index.php');
    exit;
}
?>
