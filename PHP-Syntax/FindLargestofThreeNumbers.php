<?php
$numOne = fgets(STDIN);
$numTwo = fgets(STDIN);
$numThree = fgets(STDIN);
//
//$largestFromOneTwo = $numOne;
//if ($numTwo > $numOne) {
//    $largestFromOneTwo = $numTwo;
//}
//if ($numTree > $largestFromOneTwo) {
//    echo "Max:".$numTree;
//}else{
//    echo "Max:".$largestFromOneTwo;
//}
$largestFromOneTwo = max($numOne, $numTwo);
$largest = max($largestFromOneTwo, $numThree);

echo "Max number is " . $largest;