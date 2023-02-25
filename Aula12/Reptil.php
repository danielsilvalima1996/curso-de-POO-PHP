<?php
require_once 'Animal.php';
class Reptil extends Animal{
    //Atributos
    private $corEscama;
    //Métodos
    public function locomover() {
        echo "<p>Rastejando...</p>";
    }
    public function alimentar() {
        echo "<p>Comendo vegetais...</p>";        
    }
    public function emitirSom() {
        echo "<p>Som de réptil...</p>";
    }
    //Métodos Especiais
    function getCorEscama() {
        return $this->corEscama;
    }
    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
}
