<?php
    function add($var){
        $var++;
    }

   

    $a = 10;

    // El Valor sigue siendo 10
    add($a);
    
    // El valor aumenta en 11 por que no solo pasa el valor, tambien toda la variable
    add(&$a);


?>