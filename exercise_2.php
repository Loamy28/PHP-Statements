<?php

$quantity1 = 70;
$quantity2 = 100;
$price1 = 35;
$price2 = 30;

$total1 = $quantity1 * $price1;
$total2 = $quantity2 * $price2;

    if($total1 < $total2){
        echo "First item is the best deal to purchase";
    }else{
        echo "Second item is the best deal to purchase";
    }

?>