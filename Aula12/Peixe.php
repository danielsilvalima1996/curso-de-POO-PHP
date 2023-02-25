<?php
require_once 'Animal.php';
class Peixe extends Animal{
    //Atributos
    private $corEscama;
    //Métodos
    public function soltarBolha() {
        echo "<p>Soltando bolhas...</p>";
    }
    public function locomover() {
        echo "<p>Nadando...</p>";
    }
    public function alimentar() {
        echo "<p>Comendo substâncias...</p>";
    }
    public function emitirSom() {
        echo "<p>Não emite som!</p>";
    }
    //Métodos Especiais
    public function getCorEscama() {
        return $this->corEscama;
    }
    public function setCorEscama($ce) {
        $this->corEscama = $ce;
    }
}
