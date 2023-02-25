<?php
require_once 'Mamifero.php';
class Canguru extends Mamifero{
    //Métodos
    public function usarBolsa() {
        echo "<p>Usando a bolsa...</p>";
    }
    public function locomover() {
        echo "<p>Pulando...</p>";
    }
}
