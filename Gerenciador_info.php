<?php
// Classe GerenciadorCarros para gerenciar o CRUD dos carros
class GerenciadorInfo {
    private $infos = [];
    private $arquivo = 'dados.json';

    // Construtor da classe, carrega os dados do arquivo JSON
    public function __construct() {
        if (file_exists($this->arquivo)) {
            $dados = file_get_contents($this->arquivo);
            $this->info = json_decode($dados, true) ?? [];
        }
    }

    // Adiciona um novo carro e salva no arquivo JSON
    public function adicionarCarro($carro) {
        $this->carros[] = [
            'brinquedo' => $info->getBrinquedo(),
            'comida' => $comida->getComida(),
            'local' => $local->getLocal(),
            
        ];
        $this->salvarDados();
    }

    // Remove um carro pelo índice e salva no arquivo JSON
    public function deletarCarro($indice) {
        if (isset($this->info[$indice])) {
            array_splice($this->info, $indice, 1);
            $this->salvarDados();
        }
    }

    // Retorna a lista de carros
    public function getInfo() {
        return $this->info;
    }

    // Salva os dados no arquivo JSON
    private function salvarDados() {
        file_put_contents($this->arquivo, json_encode($this->info, JSON_PRETTY_PRINT));
    }
}
?>
