<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador{
    //Atributos
    private $volume;
    private $ligado;
    private $tocando;
    
    //Métodos
    public function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    private function getVolume() {
        return $this->volume;
    }
    private function getLigado(){
        return $this->ligado;
    }
    private function getTocando() {
        return $this->tocando;
    }
    private function setVolume($volume) {
        $this->volume = $volume;
    }
    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }
    private function setTocando($tocando){
        $this->tocando = $tocando;
    }
    public function ligar() {
        $this->setLigado(true);
        $this->setTocando(true);
    }
    public function desligar() {
        $this->setLigado(false);
        $this->setTocando(false);
    }
    public function abrirMenu() {
        echo "<br>Está ligado?: " . ($this->getLigado()?"SIM":"NÃO");
        echo "<br>Está tocando?: " . ($this->getTocando()?"SIM":"NÃO");
        echo "<br>Volume: " . ($this->getLigado(true)?$this->getVolume():"Desligado");
        if ($this->getLigado()) {
            for($i=0; $i <= $this->volume; $i+=10){
            echo " | ";
            }
        } 
        echo "<br>";
    }
    public function fecharMenu() {
        echo "<br>Fechando o Menu...";
    }
    public function maisVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 10);
        }
    }
    public function menosVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 10);
        }
    }
    public function ligarMudo() {
        if ($this->getLigado() and $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }
    public function desligarMudo() {
        if ($this->getLigado() and $this->getLigado() == 0) {
            $this->setVolume(50);
        }
    }
    public function play() {
        if ($this->getLigado() and !($this->getTocando())) {
            $this->setTocando(true);            
        }
    }
    public function pause() {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }
}
