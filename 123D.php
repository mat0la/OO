<?php

class Conta {

    public $numero;
    public $banco;
    public $saldo;

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        $this->saldo -= $valor;
    }

}

?>