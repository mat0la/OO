<?php


require_once 'retangulo.php';


$retangulo = new Retangulo();


$largura = $_POST['largura'];
$altura = $_POST['altura'];


$retangulo->setLadoMaior($largura);
$retangulo->setLadoMenor($altura);


$area = $retangulo->calculaArea();


if ($_POST) {
    echo "A área é: $area";
} else {

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Retângulo</title>
</head>
<body>
    <form action="retangulo.php" method="post">
        <label>Largura:</label>
        <input type="text" name="largura" />
        <br />
        <label>Altura:</label>
        <input type="text" name="altura" />
        <br />
        <input type="submit" value="Calcular Área" />
    </form>
</body>
</html>
<?php
}

?>