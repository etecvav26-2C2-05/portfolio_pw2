<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeros = $_POST['numeros']; 
    $somaTotal = 0;

    foreach ($numeros as $num) {
        $somaTotal += (int)$num;
    }

    echo "<h2>Resultado</h2>";
    echo "<div class='resultado'>A soma total é: $somaTotal</div>";
    echo "<p>Números digitados: " . implode(", ", $numeros) . "</p>";
}
?>

<br>
<a href="index.php">Voltar</a>

</body>
</html>