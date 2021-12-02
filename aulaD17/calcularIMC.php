<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>IMC</th>
            <th>Classificação</th>
        </tr>
        <tr>
            <th>Abaixo de 18,5</th>
            <td>Abaixo do peso</td>
        </tr>
        <tr>
            <th>Entre 18,5 24,9</th>
            <td>Peso ideal(Parabens)</td>
        </tr>
        <tr>
            <th>Entre 25,0 e 29,9</th>
            <td>Levemente acima do peso</td>
        </tr>
        <tr>
            <th>Entre 30,0 e 34,9</th>
            <td>Obesidade grau I</td>
        </tr>
        <tr>
            <th>Entre 35,0 e 39,9</th>
            <td>Obesidade grau II(severa)</td>
        </tr>
        <tr>
            <th>acima de 40</th>
            <td>Obesidade grau III(morbida)</td>
        </tr>
    </table><br>
    <?php
        $Nome = $_POST ["Nome"];
        $Altura = (float) $_POST ["Altura"];
        $Peso = (float) $_POST ["Peso"];

        $IMC = $Peso / ($Altura * $Altura);

        echo "Nome: $Nome<br>";
        echo "IMC: $IMC<br>";

        if($IMC < 18.5){
            echo "Situação: Abaixo do peso."; 
        }
        elseif($IMC < 24.9){
            echo "Peso ideal(Parabens)."; 
        }
        elseif($IMC < 29.9){
            echo "Levemente acima do peso"; 
        }
        elseif($IMC < 34.9){
            echo "Obesidade grau I.";
        }
        elseif($IMC < 39.9){
            echo "Obesidade grau II(severa)."; 
        }
        elseif($IMC > 40.0){
            echo "Obesidade grau III(morbida)."; 
        }
    ?>
    
</body>
</html>