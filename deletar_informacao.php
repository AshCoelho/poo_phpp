<?php
require 'GerenciadorInformacoes.php';

// Verifica se o índice do carro foi enviado via GET
if (isset($_GET['indice'])) {
    $indice = $_GET['indice'];

    // Gerencia o CRUD usando GerenciadorCarros
    $gerenciadorInformacoes = new GerenciadorInformacoes();
    $gerenciadorInformacoes->deletarInformacao($indice);

    // Redireciona para a página principal
    header('Location: index.php');
    exit;
}
?>
