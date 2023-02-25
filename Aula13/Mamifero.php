<?php
require_once 'Animal.php';
class Mamifero extends Animal{
    //Atributos
    private $corPelo;
    //Métodos
    public function emitirSom() {
        echo "<p>Som de mamífero...</p>";
    }
    //Métodos Especiais
    public function getCorPelo() {
        return $this->corPelo;
    }
    public function setCorPelo($cp) {
        $this->corPelo = $cp;
    }
}
