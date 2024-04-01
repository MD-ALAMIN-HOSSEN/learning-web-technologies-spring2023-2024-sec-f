<?php
$index = 0;
function search($arr, $searchelement) {
    foreach ($arr as $key ) {
        $index++ ;
        if ($key == $searchelement) {
            return $index;
        }
    }
    return false;
}

$myArray = [10, 20, 30, 40, 50];
$searchelement = 30;


$key = search($myArray, $searchelement);
echo "element $searchelement found at index $key.";

?>
