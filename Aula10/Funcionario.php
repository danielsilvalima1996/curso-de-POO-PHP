<?php
require_once 'Pessoa.php';
class Funcionario extends Pessoa{
    //Atributos
    private $setor;
    private $trabalhando;
    //Métodos
    public function mudarTrabalho() {
        if ($this->getTrabalhando() == true) {
            $this->setTrabalhando(false);
        }
        else {
            $this->setTrabalhando(true);
        }
    }
    //Métodos Especiais
    public function __construct($no, $id, $se, $set, $tra) {
        $this->setNome($no);
        $this->setIdade($id);
        $this->setSexo($se);
        $this->setSetor($set);
        $this->setTrabalhando($tra);
    }
    public function getSetor() {
        return $this->setor;
    }
    public function setSetor($set) {
        $this->setor = $set;
    }
    public function getTrabalhando() {
        return $this->trabalhando;
    }
    public function setTrabalhando($tra) {
        $this->trabalhando = $tra;
    }
}
