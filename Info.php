<?php
// Classe Carro que representa um carro
class Info {
    private $brinquedo;
    private $comida;
    private $local;


    // Construtor da classe
    public function __construct($brinquedo, $comida, $local) {
        $this->brinquedo = $brinquedo;
        $this->comida = $comida;
        $this->local = $local;
    }

    // Getters para acessar as propriedades do carro
    public function getBrinquedo() {
        return $this->brinquedo;
    }

    public function getComida() {
        return $this->comida;
    }

    public function getLocal() {
        return $this->lcal;
    }
}
?>
