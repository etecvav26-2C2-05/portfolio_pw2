<?php

$numero = $_POST["txtNumero"];

//Verifica se o número está entre o 100 e o 200
if ($numero >= 100 && $numero <= 200) {
    echo "O numero: " . $numero . " esta no intervalo de 100 e 200";

//Caso não esteja, ele alerta que o número colocado não cumpre os requisitos do intervalo
} else {
    echo "O numero: " . $numero . " nao esta no intervalo de 100 e 200";
}


?>
