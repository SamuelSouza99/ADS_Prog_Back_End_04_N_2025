<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario aula 06-02</title>
</head>
<body>
    <h1>Formulário da Aula 06 parte 02 - 17/09/2025</h1>

    <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        echo "Numero 1: $num1, Numero 2: $num2";

        echo "<br>Adição: ".($num1+$num2);
        echo "<br>Subtração: ".($num1-$num2);
        echo "<br>Multiplicação: ".($num1*$num2);
        echo "<br>Divisão: ".($num1/$num2);
        echo "<br>Modulo: ".($num1%$num2);
        echo "<br>Exponenciação: ".($num1**$num2);
        echo "<hr>";

        echo "<br>Igualdade = ".($num1 == $num2); // verdadeiro.
        echo "<br>Idêntico = ".($num1 === $num2); // falso
        echo "<br>Não Igual = ".($num1 != $num2); // falso
        echo "<br>Não Idêntico = ".($num1 !== $num); // verdadeiro.
    ?>
</body>
</html>