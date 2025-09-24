<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07 - Exercicio</title>
</head>
<body>
    <h1>Aula 07 Exercicio</h1>

    <form action="#" method="post">
        Digite um numero: <input type="text" name="num"><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        $num = $_POST["num"];

        echo "<br>Numero escolhido = $num";

        $par_impar = ($num % 2);

        $res = ($par_impar == 1) ? "Impar" : "Par";

        echo "<br> $res";
    ?>
</body>
</html>