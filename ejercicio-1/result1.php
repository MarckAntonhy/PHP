<?php
    $number = $_POST["number"];

    $total = 0;
    for ($i=0; $i <= $number; $i++) { 
        $total += $i;
    }

    echo "La Suma es: $total";
?>