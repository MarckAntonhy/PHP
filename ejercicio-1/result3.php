<?php
    $list[] = 1;
    $list[] = 4;
    $list[] = 7;
    $list[] = 10;
    $list[] = 13;
    $list[] = 16;

    $index = $_POST['index'];

    $total = 0;
    for ($i=0; $i < $index; $i++) { 
        $total += $list[$i];
    }


    echo "La suma de las series es: $total";
?>