<?php
    $number = $_POST["number"];

    $total = 0;
    for ($i=0; $i <= $number; $i++) { 
        if($i%2 == 0){
            $total += $i;
        }
    }

    echo "La Suma de los numeros pares es: $total";
?>