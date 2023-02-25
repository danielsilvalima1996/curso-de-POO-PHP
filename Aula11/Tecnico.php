<?php
require_once 'Aluno.php';
class Tecnico extends Aluno{
    //Atributos
    private $registroProfissional;
    private $praticar;
    //Métodos
    public function praticar() {
        echo "<p>$this->nome está  praticando!</p>";
    }
    //Métodos Especiais
    public function __construct($nome, $idade, $sexo, $curso, $matr, $regPro) {
        parent::__construct($nome, $idade, $sexo, $curso, $matr);
        $this->setRegPro($regPro);
        }
    public function getRegPro() {
        return $this->registroProfissional;
    }
    public function setRegPro($regPro) {
        $this->registroProfissional = $regPro;
    }
    public function getPraticar() {
        return $this->praticar;
    }
    public function setPraticar($praticar) {
        $this->praticar = $praticar;
    }
}
