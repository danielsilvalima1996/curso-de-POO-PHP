<?php
require_once 'Video.php';
require_once 'Gafanhoto.php';
class Visualizacao{
    //Atributos
    private $espectador;
    private $filme;
    //Métodos
    public function avaliar() {
        $this->filme->setAvaliacao(5);
    }
    public function avaliarNota($nota) {
        $this->filme->setAvaliacao($nota);
    }
    public function avaliarPorcetagem($por) {
        $nova = 0;
        if ($por <= 20) {
            $nova = 3;
        }
        elseif ($por <= 50) {
            $nova = 5;
        }
        elseif ($por <= 90) {
            $nova = 8;
        }
        else {
            $nova = 10;
        }
        $this->filme->setAvaliacao($nova);
    }
    //Métodos Especiais
    function __construct($espectador, $filme) {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
    }
    function getEspectador() {
        return $this->espectador;
    }
    function getFilme() {
        return $this->filme;
    }
    function setEspectador($espectador) {
        $this->espectador = $espectador;
    }
    function setFilme($filme) {
        $this->filme = $filme;
    }
}    