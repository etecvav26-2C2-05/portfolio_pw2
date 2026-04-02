<!--
Data: 28/03/2026
Autor: Nicoli Gabrielle Cunha, Ricardo Amaro Herzig, Suelen Almeida dos Santos Silva
Objetivo: Criar um programa que leia um número (n) e mostre os (n) primeiros termos da sequência fibonacci

Exercício 6 - Série de Fibonacci
Leia um número n e mostre os n primeiros termos da sequência de Fibonacci.

Exemplo:
n = 12
Resultado:
0 1 1 2 3 5 8 13 21 34 55 89.
-->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<body>
    <h1>Sequencia Fibonacci</h1>

    <br>
    <form name="frmFibo" action="ex6.php" method="POST">
        <label for="txtFibo">Digite um número para a sequência:</label>
        <input type="number" name="txtFibo"  min="1" required/>/>
        <input type="submit" name="btnCalculo" value="descobrir"/>
        </form>

</body>
</html>
