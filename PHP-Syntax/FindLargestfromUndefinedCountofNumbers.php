<?php

//$largest = 0;
//while ($num = intval(trim(fgets(STDIN)))) {
//    if ($num > $largest) {
//        $largest = $num;
//    }
//}
//echo "Max:" . $largest;

/*
$largest = 0;
while ($num = intval(fgets(STDIN))) {
    $largest = max($largest, $num);
}
echo "max:" . $largest;
*/
//all the numbers in an array
$numbers = [];
while ($num = intval(fgets(STDIN))) {
    $numbers[] = $num;//pulnim masiva
}
//print_r($numbers);
echo "Max:".max($numbers);