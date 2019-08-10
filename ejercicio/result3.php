<?php
    $capitalD = $_POST['capitalD'];
    $interes = 0;
    $interesMensual = 0;

    if($capitalD < 500){
        $interes = 2;
    }
    else if($capitalD <= 500 && $capitalD <= 1500){
        $interes = 4.5;
    }else{
        $interes = 9;
    }

    $interesMensual = $capitalD * $interes / 100;

    echo "El interes mensual es: $interesMensual";
?>