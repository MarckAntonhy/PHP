<?php
    $number = $_POST['number'];

    if($number == 0){
        echo "El numero es neutro";
    }
    elseif($number > 0)
    {
        echo "El numero es positivo";
    }
    else
    {
        echo "El numero es negativo";
    }
?>