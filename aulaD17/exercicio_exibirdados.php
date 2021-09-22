<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir dados</title>
</head>
<body>
    <h1>Exibir Dados</h1>
    <?php
     $Nome = $_GET ["Nome"];
     $Altura = $_GET ["Altura"];
     $Peso = $_GET ["Peso"];
    ?>
    <p>Nome : <?= $Nome?></p>
    <p>Altura : <?= $Altura?></p>
    <p>Peso <?= $Peso?></p>
</body>
</html>