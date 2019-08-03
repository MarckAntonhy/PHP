<?php
    $dias = $_POST['dt'];
    $horas = $_POST['hd'];
    $costo = $_POST['ch'];
    $resul = $dias * $horas * $costo;
    
    echo "Dias trabajados: $dias <br>";
    echo "Horas por dia: $horas <br>";
    echo "Costo por hora: $costo <br>";
    echo "Resultado: $resul <br>";
?>