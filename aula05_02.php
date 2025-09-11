<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula05_02</title>
</head>
<body>
    <h1>aula05_02 - 10/09/2025</h1>

    <?php
        echo "<pre>"; print_r($_REQUEST); echo "</pre>"; // Pega requesições e printa na tela. É UM OOMANDO PARA TESTES APENAS

        $login = $_POST["login"]; // Resgada os dados do campo login.
        $senha = $_POST["senha"]; 

        echo "Login: $login <br>";
        echo "Senha: $senha <br>";
    ?>
</body>
</html>