<?php

class Mouse {
    var $marca;
    var $modelo;
    var $leitor;
    var $conexao;
    var $sit;

function cligar() {
    if ($this->sit == true) {
        echo "Clicando<br>";
    } else {
        echo "Mouse Desligado<br>";
    }
}
}