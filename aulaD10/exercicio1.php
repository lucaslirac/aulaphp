<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
</head>
<body>
<?php
   $num1 = 10;
   $num2 = 20;

   $soma = $num1 + $num2;
   $subtracao = $num1 - $num2;
   $mutiplicacao = $num1 * $num2;
   $divisao = $num1 / $num2;
   
  echo "<h1>Atividade</h1>.<br>";

  echo "<p><strong>Numero 1 $num1 = 10</strong> </p>.<br>";

  echo "<p><strong>Numero 2 $num2 = 20</strong> </p>.<>";

  echo "<p><strong>A soma do numero 1 $num1 e numero 2 é: $soma </strong> </p>.<br>";

  echo "<p><strong> A subtracao do numero1: $num1 e $num2 é: $subtracao </strong> </p>.<br>";

  echo "<p><strong>A multiplicacao do numero1 $num1 e $num2 é: $mutiplicacao</strong></p>.<br>";

  echo "<p><strong>A divisao do numero 1 $num1 e $num2 é: $divisao</strong></p>.<br>";
?>
    
</body>
</html>