<?php
    function add($num, $inc=1){
        $num += $inc;
    }

    //El incremento es 1
    echo add(5);

    // El incremento ya no es 1 si no 2
    echo add(5,2);
?>