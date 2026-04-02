<!--
Data: 19/03/2026
Autor: Nicoli Gabrielle Cunha, Ricardo Amaro Herzig, Suelen Almeida dos Santos Silva
Objetivo: Criar um programa que converta a temperatura de celcius para fahrenheit ou o contrário

Exercício 2 - Conversão de Temperatura
Faça um programa que leia um caractere "F" ou "C", indicando se o valor informado está em Fahrenheit ou Celsius.
Depois, o programa deve converter para a outra unidade.

Fórmula: C = 5/9 × (F − 32)
-->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertor de temperaturas</title>
</head>
<body>

    <h1>Convertor de temperaturas</h1>
    <h2>De F para C ou C para F</h2>


    <br>
    <form name="frmIntervalo" action="ex2.php" method="POST">

        <label for="txtTemperatura">Informe a temperatura:</label> 
        <input type="number" name="txtTemperatura"/> <br> 

        <br>
        <label for="txtMedidas">Informe a medida (F/C):</label>
        <input type="text" name="txtMedidas"/>

        <input type="submit" name="btnCalcular" value="Calcular"/>
    </form>

</body>
</html>
