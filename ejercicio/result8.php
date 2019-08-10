<?php
    $secound = $_POST['secound'];
    $segundosenMinutos = $secound / 60;
    $hora = floor($segundosenMinutos / 60);
    $minutos = $segundosenMinutos%60;
    $segundos = $secound - (($hora * 3600) + ($minutos * 60));
    

    echo "Son ".intval($hora) . " hora con ".$minutos. " segundos $segundos";


    for ($i=0,$e=0,$c=0; $i < ; $i++) { 
        //Mira la primera expresión, declaro 3 variables
        $e++;
        $i++;
        $c++;
    }
?>