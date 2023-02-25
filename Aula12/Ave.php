<?php
require_once 'Animal.php';
class Ave extends Animal{
    //Atributos
    private $cor;
    //Métodos
    public function fazerNinho() {
        echo "<p>Ninho construído!</p>";        
    }
    public function locomover() {
        echo "<p>Voando...</p>";
    }
    public function alimentar() {
        echo "<p>Comendo migalhas...</p>";
    }
    public function emitirSom() {
        echo "<p>Som de ave...</p>";
    }
    //Métodos Especiais
    public function getCor() {
        return $this->cor;
    }
    public function setCor($cor) {
        $this->cor = $cor;
    }
}
