<?php

class ContaBanco {
    //Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    //Métodos
    public function __construct() {
        $this->saldo = 0;
        $this->status = false;
        echo "<p>Conta criada com sucesso!</p>";
    }   
    public function abrirConta($t) {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t=="CC"){
            $this->setSaldo(50);
        }
        elseif ($t =="CP") {
            $this->setSaldo(150);
        }
    }
    public function fecharConta() {
        if ($this->getSaldo() > 0) {
            echo "<p>Conta ainda tem dinheiro, não posso fechá-la!</p>";
        }
        elseif ($this->saldo < 0) {
            echo "<p>Conta está em débito, impossível encerrar!</p>";
    }
        else {
            $this->setStatus(false);
            echo "<p>Conta de " . $this->dono . " fechada com sucesso! </p>";
        }
    }
    public function depositar($v) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Deposito de R$ $v na conta de ".$this->dono. "</p></br>";
        }
        else {
            echo "<p>Conta fechada. Não consigo depositar.</p>";
        }
    }
    public function sacar($v) {
        if ($this->getStatus() == true) {
            if ($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de R$ $v autorizado na conta de " .$this->getDono(). "</p></br>";
            }
            else {
                echo "<p>Saldo insuficiente para saque.</p>";
            }
        }
        else {
            echo "<p>Não posso sacar de uma conta fechada.</p>";
        }
    }
    public function pagarMensal() {
        if ($this->getTipo() == "CC") {
            $v = 12;
        }
        elseif ($this->getTipo() == "CP") {
            $v = 20;
        }
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade de R$ $v debitada da conta de ". $this->dono . "</p></br>";
        }
        else {
            echo "<p>Problemas com a conta. Não posso cobrar</p>";
        }
    }
    public function setNumConta($n) {
        $this->numConta = $n;
    }
    public function getNumConta() {
        return $this->numConta;
    }
    public function setTipo($t) {
        $this->tipo = $t;
    }
    public function getTipo() {
        return $this->tipo;
    }
    public function setDono($d) {
        $this->dono = $d;
    }
    public function getDono() {
        return $this->dono;
    }
    public function setSaldo($s) {
        $this->saldo = $s;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setStatus($s) {
        $this->status = $s;
    }
    public function getStatus() {
        return $this->status;
    }
}
