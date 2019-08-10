<?php
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    while ($number1 <= $number2) {
        echo "Numero $number1 es multiplo de 3: ". ($number1%3 == 0 ? "SI" : "NO")."<br>";
        $number1++;
    }
?>
