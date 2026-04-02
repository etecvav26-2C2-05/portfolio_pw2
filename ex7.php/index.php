<!--
Data: 27/03/2026
Autor: Nicoli Gabrielle Cunha, Ricardo Amaro Herzig, Suelen Almeida dos Santos Silva
Objetivo: Criar um programa que leia 8 números inteiros e separe eles em 2 vetores, um negativo e um positivo.

Exercício 7 - Separar Positivos e Negativos
Leia 8 números inteiros e separe em dois vetores:

Um vetor com números positivos
Um vetor com números negativos
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Separador de Numeros Positivos e Negativos</title>
</head>
<body>

    <h1>Separador de Números Positivos e Negativos</h1>

    <form action="ex7.php" method="post">

    
        <?php for ($i = 1; $i < 9; $i++) { echo "Digite o {$i}º número: "?>
            <input type="number" name="numeros[]" required><br><br>
        <?php } ?>
        <button type="submit">Separar</button>

    </form>

    
</body>
</html>
