<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08_01 - 01/10</title>
</head>
<body>
    <h1>Aula 08 parte 1 - 01/10/2025</h1>

    <form action="#" method="post">
        Insira sua idade: <input type="number" name="idade" required><br>
        <input type="submit" value="Verificar">
    </form>
    <hr>
    <?php
        if (count($_POST)==0) exit;

        $idade = $_POST["idade"];

        echo "Idade: <strong>$idade</strong> <br>";

        if ($idade >= 1 && $idade < 13) {
            echo "<br>Você não pode criar uma conta. A idade minima é 13.";
        } else if ($idade >= 13 && $idade <= 17) {
            echo "<br>Você pode criar uma 'conta com consentimento dos pais.";
        } else if ($idade >= 18 && $idade <= 64) {
            echo "<br>Você pode criar uma conta. Bem-vindo à nossa rede social!";
        } else if ($idade >= 65) {
            echo "<br>Você pode criar uma conta. Lembre-se de verificar nossas configurações de privacidade.";
        } else {
            echo "Idade Invalida!";
        }
    ?>
</body>
</html>