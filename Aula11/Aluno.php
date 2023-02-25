<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    //Atributos
    private $curso;
    private $matricula;
    //Métodos
    public function pagarMensalidade() {
        echo "<p>Pagando mensalidade do aluno " . $this->getNome(). "</p>";
    }
    //Métodos Especiais
    public function __construct($nome, $idade, $sexo, $curso, $matr) {
        parent::__construct($nome, $idade, $sexo);
        $this->setCurso($curso);
        $this->setMatricula($matr);
        }
    public function getCurso() {
        return $this->curso;        
    }
    public function setCurso($curso) {
        $this->curso = $curso;
    }
    public function getMatricula() {
        return $this->matricula;
    }
    public function setMatricula($matr) {
        $this->matricula = $matr;
    }

}
