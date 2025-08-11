<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <h1 class="titulo_principal">Lista De Execícios</h1>
    <br>
    <section class="secao_1 secoes">
        <div class="alinhamento_titulos">
            <h1>Atividade 1</h1>
        </div>
        <p>
            Escreva um programa que verifique se um número fornecido pelo usuário é positivo, negativo ou zero.
        </p>
        <?php
        $numero = 0;

        echo "<p>Valor Inserido: {$numero}<br><br>";

        if ($numero > 0) {
            echo "<p>O número <strong>{$numero}</strong> é positivo";
        } else if ($numero = 0) {
            echo "<p>O número fornecido é <strong>{$numero}</strong>";
        } else {
            echo "<p>O número <strong>{$numero}</strong> é negativo";
        }
        ?>
    </section>

    <section class="secao_2 secoes">
        <div class="alinhamento_titulos">
            <h1>Atividade 2</h1>
        </div>

        <p>
            Crie um programa que leia a idade de uma pessoa e informe se ela é maior de idade (18 anos ou mais) ou menor de idade.
        </p>

        <?php
        $idade = 17;

        echo "<p>Valor Inserido: {$idade}<br><br></p>";

        if ($idade >= 18) {
            echo "<p>Você é maior de idade";
        } else {
            echo "<p>Você é menor de idade";
        }
        ?>
    </section>

    <section class="secao_3 secoes">
        <div class="alinhamento_titulos">
            <h1>Atividade 3</h1>
        </div>
        <p>
            Escreva um programa que verifique se um número fornecido pelo usuário é par ou ímpar.
        </p>

        <?php
        $numero_par_ou_impar = 5;

        echo "<p>Valor Fornecido: {$numero_par_ou_impar}<br><br>";

        if ($numero_par_ou_impar % 2 == 0) {
            echo "<p>Esse Número è par";
        } else {
            echo "<p>Este Número é impar";
        }
        ?>
    </section>

    <section class="secao_4 secoes">
        <div class="alinhamento_titulos">
            <h1>Atividade 4</h1>
        </div>
        <p>
            Imprima os números de 1 a 10 utilizando um laço de repetição.
        </p>

        <?php
        for ($i = 0; $i <= 10; $i++) {
            echo "<p>{$i}              ";
        }
        ?>
    </section>

    <section class="secao_5 secoes">
        <div class="alinhamento_titulos">
            <h1>Atividade 5</h1>
        </div>
        <p>
            Imprima todos os números pares de 1 a 20 utilizando um laço de repetição.
        </p>

        <?php
        for ($j = 0; $j <= 20; $j++) {
            if ($j % 2 == 0) {
                echo "<p>{$j}              ";
            }
        }
        ?>
    </section>

    <section class="secao_6 secoes">
        <div class="alinhamento_titulos">
            <h1>Atividade 6</h1>
        </div>
        <p>
            Calcule a soma de todos os números de 1 a 100 utilizando um laço de repetição.(5050)
        </p>

        <?php

        $soma = 0;

        for ($k = 0; $k <= 100; $k++) {

            $soma = $soma + $k;
        }
        echo "<p>O valor da soma é : <strong>{$soma}</strong>";
        ?>
    </section>

    <section class="secao_7 secoes">
        <div class="alinhamento_titulos">
            <h1>Atividade 7</h1>
        </div>
        <p>
            Escreva um programa que verifique se uma letra fornecida pelo usuário é uma vogal ou uma consoante.
        </p>

        <?php
        $letra_fornecida = "w";

        echo "<p>Valor fornecido: {$letra_fornecida}<br><br>";

        if ($letra_fornecida == "a" || $letra_fornecida == "A" || $letra_fornecida == "e" || $letra_fornecida == "E" || $letra_fornecida == "i" || $letra_fornecida == "I" || $letra_fornecida == "o" || $letra_fornecida == "O" || $letra_fornecida == "u" || $letra_fornecida == "U") {
            echo "<p>A letra ({$letra_fornecida}) é uma <strong>Vogal<strong>";
        } else {
            echo "<p>A letra ({$letra_fornecida}) é uma <strong>Consoante</strong>";
        }
        ?>
    </section>

    <section class="secao_8 secoes">
        <div class="alinhamento_titulos">
            <h1>Atividade 8</h1>
        </div>
        <p>
            Escreva um programa que leia um mês do ano e informe quantos dias ele tem.
        </p>

        <?php

        $mes = 2;


        $meses = [
            ["janeiro", 31],
            ["fevereiro", 28],
            ["março", 31],
            ["abril", 30],
            ["maio", 31],
            ["Junho", 30],
            ["Julho", 31],
            ["Agosto", 31],
            ["Setembro", 30],
            ["Outubro", 31],
            ["Novembro", 30],
            ["Dezembro", 31]
        ];

        // utilizado pois a matriz começa em 0, então tem que voltar um, e para criar um indice para navegar a matriz 
        $indice = $mes - 1;

        // chamando os items na matriz e buscando os valores pelo indice criado
        $nome_mes = $meses[$indice][0];
        $dias_mes = $meses[$indice][1];

        echo "<p>O mes de numero {$mes} é {$nome_mes} e tem {$dias_mes} dias";
        ?>
    </section>

    <section class="secao_9 secoes">
        <h1>Atividade 9</h1>

        <p>
            Escreva um programa que leia o salário de um funcionário e aplique um aumento de acordo com a seguinte regra: salários menores que R$1000 recebem 20% de aumento, entre R$1000 e R$2000 recebem 15%, e acima de R$2000 recebem 10%.
        </p>

        <?php
        $salario_funcionario = 1500.00;
        $conta_salario = 0;
        $aumento = 0;

        if ($salario_funcionario < 1000) {
            $aumento = $salario_funcionario * 0.20;
            $conta_salario = $aumento  + $salario_funcionario;
        } else if ($salario_funcionario <= 2000) {
            $aumento = $salario_funcionario * 0.15;
            $conta_salario = $aumento + $salario_funcionario;
        } else {
            $aumento = $salario_funcionario * 0.10;
            $conta_salario = $aumento  + $salario_funcionario;
        }

        echo "<p>O seu salário de R$ {$salario_funcionario} teve um aumento de R$ {$aumento} e foi para R$ {$conta_salario}"
        ?>
    </section>

    <section class="secao_10 secoes">
        <div class="alinhamento_titulos">
            <h1>Atividade 10</h1>
        </div>
        <p>
            Imprima os primeiros 10 números da sequência de Fibonacci utilizando um laço de repetição.
        </p>

        <?php
        echo "<p>Formúla:<br>F(n) = F(n-1) + F(n-2)<br>";

        $numero_1 = 0;
        $numero_2 = 1;

        for ($m = 0; $m <= 10; $m++) {
            $formula = $numero_1 + $numero_2;
            $numero_1 = $numero_2;
            $numero_2 = $formula;

            echo  "<p>valor de: {$m} é: <strong>{$formula}</strong><br>";
        }
        ?>

        <!-- Formúla -->
        <!-- F(n) = F(n-1) + F(n-2)  -->
    </section>

    <section class="secao_11 secoes">
        <div class="alinhamento_titulos">
            <h1>Atividade 11</h1>
        </div>
        <p>
            Inverter uma String, implemente um programa que inverte uma String fornecida pelo usuário utilizando um laço de repetição.
        </p>

        <?php
        $texto = "Hello Word";
        $texto_invertido = strrev($texto);

        echo "<p>Texto normal: {$texto}<br> Texto Invertido: {$texto_invertido}";

        ?>
    </section>
</body>

</html>