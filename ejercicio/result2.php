<?php
    $number = $_POST['number'];

    if($number % 2 == 0){
        echo "El Numero Ingresado es par: $number";
    }
    else if($number%3 == 0)
    {
        echo "El Numero Ingresado SI es multipo de 3: $number";
    }
    else
    {
        echo "El Numero Ingresado NO es multipo de 3: $number";
    }
?>