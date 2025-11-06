<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09_01 - 05/11</title>
</head>
<body>
    <h1>Aula 09 parte 01 - 05/11</h1>

    <?php
        $user = Array("Bete", "João", "Beto", "Maria");

        print_r($user);

        echo "<hr>";

        $valores = [11, 5.5, "teste"]; // forma moderda de criar um array.

        echo "Pos 0: ". $valores[0];
        echo "<br>Pos 1: ". $valores[1];
        echo "<br>Pos 2: ". $valores[2];

        $valores[0] %= 2;
        $valores[1] += 1;
        $valores[2]. ", 123.";

        echo "<br>Pos 0: ". $valores[0];
        echo "<br>Pos 1: ". $valores[1];
        echo "<br>Pos 2: ". $valores[2];

        echo "<hr>";

        // Entidade Associativa:
        $estudante = [
            "nome" => "Bete",
            "ra" => 1234,
            "atv1" => 7,
            "atv2" => 8
        ];

        echo "<br>Nome: ". $estudante["nome"];
        echo "<br>RA: ". $estudante["ra"];
        echo "<br>Atividade 1: ". $estudante["atv1"];
        echo "<br>Atividade 2: ". $estudante["atv2"];

        $media = ($estudante["atv1"] + $estudante["atv2"]) / 2;

        echo "<br>Media das notas: ". $media;
        
        echo "<hr>";

        // Array Matriz ou Array Multidimensional:
        $aluno = [
            ["TBD", "Fulano", 1234566],
            ["TBC", "Beltrano", 1231234],
            ["TADS", "Sicrano", 1233211]
        ];

        echo $aluno[0][0]. " ";
        echo $aluno[0][1]. " ";
        echo $aluno[0][2]. "<br>";

        echo $aluno[1][0]. " ";
        echo $aluno[1][1]. " ";
        echo $aluno[1][2]. "<br>";

        echo $aluno[2][0]. " ";
        echo $aluno[2][1]. " ";
        echo $aluno[2][2]. "<br>";

        echo "<hr>";

        $bd = [
            ["id"=>1, "nome"=>"Bete", "ra"=>1234321],
            ["id"=>2, "nome"=>"Maria", "ra"=>321123],
            ["id"=>3, "nome"=>"João", "ra"=>998765]
        ];

        echo "Id: ". $bd[1]["id"] ."<br>";
        echo "Nome: ". $bd[1]["nome"] ."<br>";
        echo "RA: ". $bd[1]["ra"] ."<br>";

        echo "<hr>";

        // LOOP FOR para impressão de valores:
        $uf = ["SP", "RJ", "MG", "ES"];

        for ($i = 0; $i < count($uf); $i++) {
            echo "<br>".$uf[$i];
        }

        echo "<hr>";

        // Loop exclusivo do php para arrays:
        $produto = [
            "nome" => "Caderno",
            "valor" => 35.90,
            "cod" => 123
        ];

        foreach ($produto as $pos => $valor) {
            echo "$pos: $valor<br>";
        }
    ?>
</body>
</html>