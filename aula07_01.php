<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07_01 - 24/09</title>
</head>
<body>
    <h1>Aula 07 parte 1 - 24/09/2025</h1>
    <h2>Operadores Lógicos:</h2>
    <?php
        echo "<p>Operador de negação (Not (!)):</p>";

        $x = 50;
        $y = 120;
        $a = $x <= $y;
        $b = !($x <= $y);
        var_dump($a);
        echo "<br>";
        var_dump($b);

        echo "<p>Operador AND (&&):</p>";
        $c = (($x <= $y) && ($x <= $y));
        var_dump($c);

        echo "<p>Operador OR |||):</p>";
        $c = (!($x <= $y) || !($x <= $y));
        var_dump($c);

        echo "<p>Operador de Diferença XOR |xor):</p>";
        $c = !(($x <= $y) xor ($x <= $y));
        var_dump($c);

        echo "<p>Operador Ternario |condição ? valor: valor):</p>";
        $a = 10;
        $b = 50;
        $c = ($a <= $b) ? "Verdadeiro" : "Falso";
        $d = !($a <= $b) ? "Verdadeiro" : "Falso";

        echo "C = $c<br>D = $d";
    ?>
</body>
</html>