class Triangulo {

private $base;
private $altura;

public function setBase(float $base) {
    $this->base = $base;
}

public function setAltura(float $altura) {
    $this->altura = $altura;
}

public function calculaArea() {
    return ($this->base * $this->altura) / 2;
}

}

<?php

class TestaTriangulo {

    public function main() {
        $triangulo = new Triangulo();
        $triangulo->setBase(3);
        $triangulo->setAltura(4);

        echo "A área do triângulo é: " . $triangulo->calculaArea();
    }

}

(new TestaTriangulo())->main();