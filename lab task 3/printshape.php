<?php
/*
* 
* * 
* * *  
*/
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "\r\n";
}
echo "\r\n";
echo "\r\n";


for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "\r\n";
}
echo "\r\n";
echo "\r\n";

/*
A 
B C 
D E F 
*/
$char = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $char++ . " ";
    }
    echo "\r\n";
}


?>
