<?php

$num1 = 144; 
$num2 = 77;  
$num3 = 222;

if ($num1 >= $num2 && $num1 >= $num3) {
    $largest = $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    $largest = $num2;
} else {
    $largest = $num3;
}

echo "The largest number is: $largest";
?>
