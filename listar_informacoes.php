<?php
require 'GerenciadorInformacoes.php';

// Gerencia o CRUD usando GerenciadorCarros
$gerenciadorInformacoes = new GerenciadorInformacoes();
$informacoes = $gerenciadorInformacoes->getInformacoes();

// Exibe a lista de carros
if (!empty($informacoes)) {
    foreach ($informacoes as $indice => $informacao) {
        echo "<div class='item-info'>";
        echo "Brinquedo: " . htmlspecialchars($informacao['brinquedo']) . "<br>";
        echo "Comida: " . htmlspecialchars($informacao['comida']) . "<br>";
        echo "Endereco: " . htmlspecialchars($informacao['endereco']) . "<br>";
        echo "Dia: " . htmlspecialchars($informacao['dia']) . "<br>";
        echo "<a class='botao-deletar' href='deletar_informacao.php?indice={$indice}'>Deletar</a>";
        echo "</div>";
    }
} else {
    echo "<p>Nenhum Informação encontrada.</p>";
}
?>
