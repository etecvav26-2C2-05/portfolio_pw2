<!--
Data: 29/03/2026
Autor: Nicoli Gabrielle Cunha, Ricardo Amaro Herzig, Suelen Almeida dos Santos Silva
Objetivo: Criar um programa que leia uma lista de números reais e exiba a média artmética deles.

Exercício 9 - Média Aritmética com Função
Crie uma função:

function media($v)

Que receba uma lista de números reais e retorne a média aritmética.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Média Aritmética</title>
</head>
<body>

    <h2>Digite números (separados por vírgula):</h2>

    <form method="POST" action="ex9.php">
        <input type="text" name="numeros" placeholder="Ex: 10, 5, 7, 8.5" required>
        <br><br>
        <button type="submit">Calcular Média</button>
    </form>

</body>
</html>
