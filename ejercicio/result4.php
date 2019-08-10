<?php
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $discount = 0;

    $amount = $price * $quantity;
    
    if ($quantity > 5 && $quantity < 12){
        $discount = 15;
    }
    else if($quantity > 12){
        $discount = 30;
    }

    $amount = $amount - ($amount * $discount  / 100);

    echo "Cantidad: $quantity <br>";
    echo "Precio: $price <br>";
    echo "Descuento: $discount <br>";
    echo "<h1>Importe: $amount</h1>";
?>