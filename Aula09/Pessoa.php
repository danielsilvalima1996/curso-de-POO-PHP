<?php
class Pessoa {
    //Atributos
    private $nome;
    private $idade;
    private $sexo;    
    //Métodos Especiais
    public function __construct($no, $id, $se) {
        $this->setNome($no);
        $this->setIdade($id);
        $this->setSexo($se);
    }
    function getNome() {
        return $this->nome;
    }
    function getIdade() {
        return $this->idade;
    }
    function getSexo() {
        return $this->sexo;
    }
    function setNome($no) {
        $this->nome = $no;
    }
    function setIdade($id) {
        $this->idade = $id;
    }
    function setSexo($se) {
        $this->sexo = $se;
    }
    //Métodos
    public function fazerAniver() {
        $this->setIdade($this->getIdade() + 1);
    }
}
