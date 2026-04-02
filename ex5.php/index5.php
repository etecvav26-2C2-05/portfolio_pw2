<!--
Data: 20/03/2026
Autor: Nicoli Gabrielle Cunha, Ricardo Amaro Herzig, Suelen Almeida dos Santos Silva
Objetivo: Criar um programa que leia 5 números inteiros e mostre a soma dos fatoriais desses números

Exercício 5 - Somatório de Fatoriais
Leia 5 números inteiros e mostre a soma dos fatoriais desses números.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Soma de Vetores</title>
</head>
<body>

    <h2>Digite 5 números inteiros:</h2>
    
    <form method="POST" action="ex5.php">
        <?php for ($i = 0; $i < 5; $i++): ?>
            <div class="campo">
                <label>Número <?= $i + 1 ?>:</label>
                <input type="number" name="numeros[]" required>
            </div>
        <?php endfor; ?>
        
        <button type="submit">Calcular Soma</button>
    </form>

</body>
</html>
