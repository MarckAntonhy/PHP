<?php

    $note1 = $_POST['note1'];
    $note2 = $_POST['note2'];

    function promedio($note1,$note2){
        $average = ($note1 + $note2) / 2;
        return $average;
    }

    echo "El resultado es: ". promedio($note1,$note2);
?>