<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao{
    //Atributos
    private $titulo;
    private $autor;
    private $totPag;
    private $pagAtual;
    private $aberto;
    private $leitor;
    //Métodos Especiais
    public function __construct($ti, $au, $tot, $lei) {
        $this->setTitulo($ti);
        $this->setAutor($au);
        $this->setTotPag($tot);
        $this->setLeitor($lei);
        $this->setAberto(false);
        $this->setPagAtual(0);
    } 
    function getTitulo() {
        return $this->titulo;
    }
    function getAutor() {
        return $this->autor;
    }
    function getTotPag() {
        return $this->totPag;
    }
    function getPagAtual() {
        return $this->pagAtual;
    }
    function getAberto() {
        return $this->aberto;
    }
    function getLeitor() {
        return $this->leitor;
    }
    function setTitulo($ti) {
        $this->titulo = $ti;
    }
    function setAutor($au) {
        $this->autor = $au;
    }
    function setTotPag($tot) {
        $this->totPag = $tot;
    }
    function setPagAtual($pagAtu) {
        $this->pagAtual = $pagAtu;
    }
    function setAberto($ab) {
        $this->aberto = $ab;
    }
    function setLeitor($lei) {
        $this->leitor = $lei;
    }
    // Métodos
    function detalhes() {
        echo "<hr>O livro " . $this->getTitulo() . ", escrito por " . $this->getAutor();
        echo "<br>Páginas: ". $this->getTotPag() . " atual " . $this->getPagAtual();
        echo "<br>Sendo lido por " . $this->leitor->getNome();
    }
    //Métodos da Interface
    public function Abrir() {
        $this->setAberto(true);
    }
    public function fechar() {
        $this->setAberto(false);
        $this->setPagAtual(0);
    }
    public function folhear($p) {
        if (($p > $this->totPag) || ($p <= 0)) {            
            $this->fechar();
        }
        else {
            $this->Abrir();
            $this->setPagAtual($p);
        }
    }
    public function avancarPag() {
        if ($this->pagAtual > $this->totPag) {
            $this->setPagAtual(0);
        }
        else {
            $this->setPagAtual($this->getPagAtual() + 1);
        }
    }
    public function voltarPag() {
        if ($this->pagAtual <= 0) {
            $this->setPagAtual(0);
        }
        else {
            $this->setPagAtual($this->getPagAtual() - 1);
        }
    }
}