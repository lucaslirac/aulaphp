<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
    <?php
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    $nota1 = (float)  $_POST["nota1"];
    $nota2 = (float) $_POST["nota2"];

    (float) $media = ($nota1 + $nota2) / 2;

    ?>
    
    <a href="arquivos.php">arquivos</a>
    <center><h1>Dados dos Alunos</h1></center>

    <center><table border="1">
        <tr>
            <th>nome do aluno</th>
            <th>matrcula</th>
            <th>media</th>
        </tr>
        <tr>
            <td><center><?=$nome?></center></td>
            <td><center><?=$matricula?></center></td>
            <td><center><?=$media?></center></td>
        </tr> 

    </table></center>



     
    
</body>
</html>