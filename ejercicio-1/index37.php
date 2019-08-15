<?php
    $num = 5;

    $acumulador = 1; 

    while($acumulador<$num){
        for ($i=$acumulador; $i <= $num; $i++) { 
            echo $i . " ";
        }

        for ($i=1; $i < $acumulador; $i++) { 
            echo $i . " ";
        }

        echo "<br>";
        $acumulador++;
    }
    
?>