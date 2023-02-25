<?php
require_once 'Pessoa.php';
class Professor extends Pessoa{
    //Atributos
    private $especialidade;
    private $salario;    
    //Métodos
    public function receberAum($aum) {
        $this->setSalario($this->getSalario() + $aum);
    }
    //Métodos Especiais
    public function __construct($no, $id, $se, $es, $sa) {
        $this->setNome($no);
        $this->setIdade($id);
        $this->setSexo($se);
        $this->setEspecialidade($es);
        $this->setSalario($sa);
    }
    public function getEspecialidade() {
        return $this->especialidade;
    }
    public function setEspecialidade($es) {
        $this->especialidade = $es;
    }
    public function getSalario() {
        return $this->salario;
    }
    public function setSalario($sa) {
        $this->salario = $sa;
    }
}
