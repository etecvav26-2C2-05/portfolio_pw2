<?php

include ("index.php");

if (isset($_POST['valor'])) {
    $n = $_POST['valor'];
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        echo "<br>";
    }
}
?>