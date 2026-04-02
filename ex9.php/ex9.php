<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

<?php

/**
 * Função que recebe uma lista (array) e retorna a média
 */
function media($v) {
    $soma = array_sum($v);
    $quantidade = count($v);

    if ($quantidade == 0) {
        return 0;
    }

    return $soma / $quantidade;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recebe os números como string
    $entrada = $_POST['numeros'];

    // Transforma em array (separando por vírgula)
    $meusNumeros = explode(",", $entrada);

    // Converte cada valor para número
    $meusNumeros = array_map('floatval', $meusNumeros);

    // Calcula a média
    $resultado = media($meusNumeros);

    echo "<h2>Resultado</h2>";
    echo "Os números são: " . implode(", ", $meusNumeros) . "<br>";
    echo "A média aritmética é: " . $resultado;
}
?>

<br><br>
<a href="index.php">Voltar</a>

</body>
</html>