<?php
require_once 'Aluno.php';
class Bolsista extends Aluno{
    //Atributos
    private $bolsa;
    //Métodos
    public function renovarBolsa() {
        echo "<p>Bolsa Renovada</p>";
    }
    public function pagarMensalidade() {
        echo "<p>$this->nome é bolsista! Então paga com desconto!</p>";
    }
    //Métodos Especiais
    public function __construct($nome, $idade, $sexo, $curso, $matr, $bolsa) {
        parent::__construct($nome, $idade, $sexo, $curso, $matr);
        $this->setBolsa($bolsa);
        }
    public function getBolsa() {
        return $this->bolsa;
    }
    public function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }
}
