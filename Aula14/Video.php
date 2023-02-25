<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo{
    //Atributos
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;
    private $media;
    //Métodos
    public function like() {
        $this->setCurtidas($this->curtidas ++);
    }
    public function pause() {
        $this->setReproduzindo(false);
    }
    public function play() {
        $this->setReproduzindo(True);
    }
    //Métodos Especiais
    public function __construct($titulo) {
        $this->setTitulo($titulo);
        $this->setCurtidas(0);
        $this->setReproduzindo(false);
    }
    public function getTitulo() {
        return $this->titulo;
    }
    public function getAvaliacao() {
        return $this->avaliacao;
    }
    public function getViews() {
        return $this->views;
    }
    public function getCurtidas() {
        return $this->curtidas;
    }
    public function getReproduzindo() {
        return $this->reproduzindo;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    public function setAvaliacao($nota) {
        $media = ($nota + $this->avaliacao)/$this->views;
        $this->avaliacao = $media;
    }
    public function setViews($view) {
        $this->views = $view;
    }
    public function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
    }
    public function setReproduzindo($reproduzindo) {
        $this->reproduzindo = $reproduzindo;
    }
}
