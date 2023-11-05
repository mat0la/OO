<?php

require_once "Sequencia.php";

$sequencia = new Sequencia(4, 100);

echo "Selecione o valor inicial: ";
$inicio = (int) readline();
$sequencia->setInicio($inicio);

echo "Selecione o valor final: ";
$fim = (int) readline();
$sequencia->setFim($fim);

echo "

**Opções:**

* Todos
* Apenas os pares
* Apenas os impares

Selecione uma opção: ";
$opcao = readline();

switch ($opcao) {
    case "Todos":
        $sequencia->exibirTodosNumeros();
        break;
    case "Apenas os pares":
        $sequencia->exibirPares();
        break;
    case "Apenas os impares":
        $sequencia->exibirImpares();
        break;
    default:
        echo "Opção inválida.";
}

?>