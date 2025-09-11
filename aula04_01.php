<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 04 - 01</title>
</head>
<body>
    <h1>Aula 04-01 - 03/09</h1>

    <?php
        $num = 3;
        $float = 8.9;
        $nome = "Bete";

        // var_dump($nome);

        define("USER", "admin"); // constante em PHP.

        echo "User: ". USER;

        $cep = "0113123"; // numeros com 0 a esquerda precisam ser texto por causa da formatação do PHP.

        echo "<br>CEP: $cep <br>";
        echo '<br>CEP: $cep <br>'; // ignora a formação do PHP.

        
    ?>
</body>
</html>