<?php

class Empresa {
    private $nome;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
}

class Aeroporto {
    private $nome;
    private $cidade;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }
}

class Tripulante {
    private $tipo;

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
}

class Voo {
    private $codigo;
    private $origem;
    private $destino;

    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function getOrigem() {
        return $this->origem;
    }

    public function setOrigem($origem) {
        $this->origem = $origem;
    }

    public function getDestino() {
        return $this->destino;
    }

    public function setDestino($destino) {
        $this->destino = $destino;
    }
}



$empresa = new Empresa();
$empresa->setNome("Azul Linhas Aéreas");
echo $empresa->getNome(); 

$aeroporto = new Aeroporto();
$aeroporto->setNome("Galeão - Aeroporto Internacional Tom Jobim");
$aeroporto->setCidade("Rio de Janeiro");
echo $aeroporto->getNome();
echo $aeroporto->getCidade();

$tripulante = new Tripulante();
$tripulante->setTipo("Copiloto");
echo $tripulante->getTipo();

$voo = new Voo();
$voo->setCodigo("AZ222");
$voo->setOrigem("São Paulo");
$voo->setDestino("Rio de Janeiro");
echo $voo->getCodigo(); 
echo $voo->getOrigem(); 
echo $voo->getDestino(); 