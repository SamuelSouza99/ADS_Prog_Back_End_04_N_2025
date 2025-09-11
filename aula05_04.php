<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05_04</title>
</head>
<body>
    <h1>Aula 05 parte 04 - 10/09/2025</h1>

    <?php
        $nome = $_POST["nome"];
        $data = $_POST["data"];
        $av1 = $_POST["av1"];
        $av2 = $_POST["av2"];
        $media = ($av1 + $av2) / 2;

        echo "Nome: $nome <br>";
        echo "Data: $data <br>";
        echo "Avaliação 1: $av1 <br>";
        echo "Avaliação 2: $av2 <br>";
        echo "Media das avaliações: $media <br>";

    ?>
</body>
</html>