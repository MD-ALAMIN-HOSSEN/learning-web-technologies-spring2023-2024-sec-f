<?php
$arr=[
    [1,2,3,'A'],
    [1,2,'B','C'],
    [1,'D','E','F']
]; 

$size = 4;
for ($i = 0; $i < 3; $i++) {
    $size --;
        for ($j = 0; $j < $size; $j++) {
            print $arr[$i][$j];
        }
    echo "\r\n";
}
$size4=4;

for ($i = 0; $i < 3; $i++) {
   if($i==0) {
    for ($j = $size4-1; $j < $size4; $j++) {
       
        print $arr[$i][$j];
    }
    
   }
   if($i==1) {
    for ($j = $size4-2; $j < $size4; $j++) {
        print $arr[$i][$j];
    }
    
   }
   if($i==2) {
    for ($j = $size4-3; $j < $size4; $j++) {
        print $arr[$i][$j];
    }
   
   }
echo "\r\n";
}
?>