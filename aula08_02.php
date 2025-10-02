<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08_02 - 01/10</title>
</head>
<body>
    <h1>Aula 08 parte 2 - 01/10/2025</h1>

    <?php
        echo md5("uninove"); // comando de criptografia.

        echo "<h2>Horário: ".date("d/m/Y H:i:s")."</h2>";

        $diaSemana = date("w"); // dia da semana em 0-6.

        // A funçao date pega a data e horario do servidor!

        switch ($diaSemana) {
            case 0:
                echo "<br>Domingo";
                break;
            case 1:
                echo "<br>Segunda";
                break;
            case 2:
                echo "<br>Terça";
                break;
            case 3:
                echo "<br>Quarta";
                break;
            case 4:
                echo "<br>Quinta";
                break;
            case 5:
                echo "<br>Sexta";
                break;
            case 6:
                echo "<br>Sabado";
                break;
        }
    ?>
</body>
</html>