<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    $nota1 = (float)  $_POST["nota1"];
    $nota2 = (float) $_POST["nota2"];

    (float) $media = ($nota1 + $nota2) / 2;

        $dados = ["nome" => $nome, "matricula" => $matricula, "media" => $media];
        $fluxoarquivos = fopen("aluno.txt", "r");
        while(!feof($fluxoarquivos)){
            $dados["nome"] = fgets($fluxoarquivos);
            $dados["matricula"] = fgets($fluxoarquivos);
            $dados["media"] = fgets($fluxoarquivos);

            fclose($fluxoarquivos);
        }
    ?>
    <table border="1">
        <?php foreach($dados as $dados){ ?>
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
    </table>
    <?php }?>
</body>
</html>