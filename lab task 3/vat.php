<?php

$amount = 100; 

$vatRate = 15; 
$vatAmount = ($amount / 100) * $vatRate;

$totalPrice = $amount + $vatAmount;


echo "Amount: $$amount";
echo "VAT ($vatRate%): $$vatAmount";
echo "Total Price (including VAT): $$totalPrice";
?>
