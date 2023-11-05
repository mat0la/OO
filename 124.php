<?php

// Classe Adulto
class Adulto {
  // Atributos
  public $peso;

  // Métodos
  public function engordar($quilos) {
    $this->peso += $quilos;
  }

  public function emagrecer($quilos) {
    $this->peso -= $quilos;
  }
}

// Classe Televisão
class Televisao {
  // Atributos
  public $status;
  public $canal;
  public $volume;

  // Métodos
  public function __construct() {
    $this->status = false;
    $this->canal = 3;
    $this->volume = 10;
  }

  public function ligaDesliga() {
    $this->status = !$this->status;
  }

  public function aumentaCanal() {
    $this->canal++;
  }

  public function diminuiCanal() {
    $this->canal--;
  }

  public function aumentaVolume() {
    $this->volume++;
  }

  public function diminuiVolume() {
    $this->volume--;
  }

  public function mostraCanal() {
    return $this->canal;
  }

  public function mostraVolume() {
    return $this->volume;
  }
}

// Exemplo de uso
$adulto = new Adulto();
$adulto->engordar(10);
echo "O peso do adulto é: " . $adulto->peso . PHP_EOL;
$adulto->emagrecer(5);
echo "O peso do adulto é: " . $adulto->peso . PHP_EOL;

$tv = new Televisao();
$tv->ligaDesliga();
echo "A televisão está ligada? " . ($tv->status ? "Sim" : "Não") . PHP_EOL;
$tv->aumentaCanal();
echo "O canal da televisão é: " . $tv->mostraCanal() . PHP_EOL;
$tv->aumentaVolume();
echo "O volume da televisão é: " . $tv->mostraVolume() . PHP_EOL;

?>