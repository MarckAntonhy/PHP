<?php
    $number = $_POST['number'];
    $power = $_POST['power'];

    $result = $number;
    for ($i=0; $i < $power - 1; $i++) { 
        $result *= $number;
    }

    echo "La potencia de $number al $power es: $result";
?>