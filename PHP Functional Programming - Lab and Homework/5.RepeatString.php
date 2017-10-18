<?php
//function factorial($number) {
//
//    if ($number < 2) {
//        return 1;
//    } else {
//        return ($number * factorial($number-1));
//    }
//}
$string="Hello, there! ";
$times=3;
function rep(string $string,int $times) {
    if($times!=0){
        return $string.' '. rep($string,$times-1);

    }
    return " ";
}

echo rep($string,$times);