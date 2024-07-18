<?php
// Classe Carro que representa um carro
class Informacao {
    private $brinquedo;
    private $comida;
    private $endereco;
    private $dia;

    // Construtor da classe
    public function __construct($brinquedo, $comida, $endereco, $dia) {
        $this->brinquedo = $brinquedo;
        $this->comida = $comida;
        $this->endereco = $endereco;
        $this->dia = $dia;
    }

    // Getters para acessar as propriedades do carro
    public function getBrinquedo() {
        return $this->brinquedo;
    }

    public function getComida() {
        return $this->comida;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getDia() {
        return $this->dia;
    }
}
?>
