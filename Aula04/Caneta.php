<?php

class Caneta {
    private $modelo;
    private $ponta;
    private $cor;
    private $tampada;    

    function Caneta($modelo, $ponta, $cor) { //ou __Constructor
        $this->modelo = $modelo;
        $this->ponta = $ponta;
        $this->cor = $cor;
        $this->setTampada(true);
    }

    
    function getModelo() {
        return $this->modelo;
    }

    function getPonta() {
        return $this->ponta;
    }

    function getTampada() {
        return $this->tampada;
    }

    function getCor() {
        return $this->cor;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setPonta($ponta) {
        $this->ponta = $ponta;
    }

    function setTampada($tampada) {
        $this->tampada = $tampada;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }
}
