<?php
require_once 'Pessoa.php';
class Professor extends Pessoa{
    //Atributos
    private $especialidade;
    private $salario;
    //Métodos
    public function receberSalario() {
        echo "<p>$this->nome está recebendo o salário no valor de $this->salario</p>";
    }
    //Métodos Especiais
    public function __construct($nome, $idade, $sexo, $especialidade, $salario) {
        parent::__construct($nome, $idade, $sexo);
        $this->setEspecialidade($especialidade);
        $this->setSalario($salario);
    }
    public function getEspecialidade() {
        return $this->especialidade;
    }
    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }
    public function getSalario() {
        return $this->salario;
    }
    public function setSalario($salario) {
        $this->salario = $salario;
    }
}
