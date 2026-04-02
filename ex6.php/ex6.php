<?php
if (isset($_POST['txtFibo'])) {

    $numeroF = (int) $_POST['txtFibo'];
    
    if ($numeroF <= 0) {
        echo "Digite um número inteiro positivo.";
        exit;
    }

    echo "Valor de n: " . $numeroF;
    echo "<div class='resultado'>";

    $a = 0;
    $b = 1;

    for ($i = 1; $i <= $numeroF; $i++) {
        echo $a . " ";

        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }

} else {
    echo "Nenhum valor foi enviado.";
}
?>