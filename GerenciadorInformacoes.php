<?php
// Classe GerenciadorCarros para gerenciar o CRUD dos carros
class GerenciadorInformacoes {
    private $informacoes = [];
    private $arquivo = 'dados.json';

    // Construtor da classe, carrega os dados do arquivo JSON
    public function __construct() {
        if (file_exists($this->arquivo)) {
            $dados = file_get_contents($this->arquivo);
            $this->informacoes = json_decode($dados, true) ?? [];
        }
    }

    // Adiciona um novo carro e salva no arquivo JSON
    public function adicionarInformacao($informacao) {
        $this->informacoes[] = [
            'brinquedo' => $informacao->getBrinquedo(),
            'comida' => $informacao->getComida(),
            'endereco' => $informacao->getEndereco(),
            'dia' => $informacao->getDia()
        ];
        $this->salvarDados();
    }

    // Remove um carro pelo índice e salva no arquivo JSON
    public function deletarInformacao($indice) {
        if (isset($this->informacoes[$indice])) {
            array_splice($this->informacoes, $indice, 1);
            $this->salvarDados();
        }
    }

    // Retorna a lista de carros
    public function getInformacoes() {
        return $this->informacoes;
    }

    // Salva os dados no arquivo JSON
    private function salvarDados() {
        file_put_contents($this->arquivo, json_encode($this->informacoes, JSON_PRETTY_PRINT));
    }
}
?>
