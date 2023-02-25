<?php
abstract class Pessoa {
    //Atributos
    protected $nome;
    protected $idade;
    protected $sexo;
    //Métodos
    public final function fazerAniver() {
        $this->idade ++;
    }
    //Métodos Especiais
    public function __construct($nome, $idade, $sexo) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
    }
            function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function getSexo() {
        return $this->sexo;
    }
    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }
}
