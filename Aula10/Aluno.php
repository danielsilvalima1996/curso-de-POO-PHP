<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    //Atributos
    private $matr;
    private $ra;
    private $curso;    
    //Métodos
    public function cancelarMatr() {
        $this->setMatr(false);
    }
    //Métodos Especiais
    public function __construct($no, $id, $se, $ra, $ma, $cu) {
        $this->setNome($no);
        $this->setIdade($id);
        $this->setSexo($se);
        $this->setRa($ra);
        $this->setMatr($ma);
        $this->setCurso($cu);
    }
    public function getRa() {
        return $this->ra;        
    }
    public function setRa($ra) {
        $this->ra = $ra;
    }
    public function getMatr() {
        return $this->matr;        
    }
    public function setMatr($ma) {
        $this->matr = $ma;
    }
    public function getCurso() {
        return $this->curso;
    }
    public function setCurso($cu) {
        $this->curso = $cu;
    }
}
