<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 06 - 01</title>
</head>
<body>
    <h1>Aula 06 parte 01 - 17/09</h1>
    <h2>Operadores</h2>

    <?php
        $a = 10;
        $b = 2;

        echo "Adição: ".($a + $b);
        echo "<br>Subtração: ".($a - $b);
        echo "<br>Multiplicação: ".($a * $b);
        echo "<br>Divisão: ".($a / $b);
        echo "<br>Modulo: ".($a % $b);
        echo "<br>Exponenciação: ".($a ** $b);
    ?>

    <h2>Operadores de Atribuição</h2>

    <?php
        $a = 10;
        $b = 2;

        $a += $b; // A recebe a soma entre A e B.
        $b -= 5; // B recebe a subtração entre B e 5.

        echo "Valor a = ".$a;
        echo "<br>Valor b = ".$b;

        $c = 11;
        $d = 6;

        $c %= $d; // C recebe o resto da divisão entre C e D.
        $d += $a; // D recebe a adição entre D e A.

        echo "<br>Valor c = ".$c;
        echo "<br>Valor d = ".$d;
    ?>

    <h2>Operador de Concatenação</h2>

    <?php
        $a = "Maria";
        $b = "Santos";

        echo $a . $b;
        echo "<br>$a ".$b;

        $b .= $a;
        echo "<br>$b";
    ?>

    <h2>Operador de Incremento e Decremento</h2>

    <?php
        $x = 100;

        echo "X = ". ++$x; // pré-incremento.
        echo "<br>X = ".$x; // Saida 

        $y = 100;
        echo "<br>Y = ". $y++; // pos-incremento.
        echo "<br>Y = ".$y; // Saida 
        echo "<hr>";

        // Simulação de um loop de decremento:
        $i = 10;
        echo "<br>i = ".$i;

        $i--;
        echo "<br>i = ".$i; // Mostra valor de i.
        echo "<br>i = ".--$i; // decrementa e mostra valor.
        echo "<br>i = ".$i--; // mostra valor e depois decrementa
        echo "<br>i = ".--$i; // decrementa e mostra valor.
        echo "<hr>";

        $z = 0;
        $z += 4; // Incrementação de 4 numros de uma vez.
        echo "<br>Z = ".$z;

    ?>

    <h2>Operadores de Igualdade</h2>

    <?php
        $a = 10;
        $b = "10";

        echo "<br>Igualdade = ".($a == $b); // verdadeiro.
        echo "<br>Idêntico = ".($a === $b); // falso
        echo "<br>Não Igual = ".($a != $b); // falso
        echo "<br>Não Idêntico = ".($a !== $b); // verdadeiro.
    ?>
</body>
</html>