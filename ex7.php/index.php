
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