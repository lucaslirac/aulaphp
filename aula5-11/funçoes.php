<!--Leia o salario de um funcionario e exiba o novo salario
     com gratificação de 5% e um imposto de 7%. -->

<?php


        function cacularGartificaçao(float $salario){
            $grat = $salario * 0.05;
            return $grat;

        }

        function calcularImposto(float $salario){
            $imp = $salario * 0.07;
            return $imp;
        }

        $salario = (float)$_POST["salario"];

        // execitando (processar a logica)
        $gratificacao = cacularGartificaçao($salario);
        $imposto = calcularImposto($salario);

        $novo_salario = $salario + $gratificacao - $imposto;
        
        echo "Novo Salario: $novo_salario";

        


?>     