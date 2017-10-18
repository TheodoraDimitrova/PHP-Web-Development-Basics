<?php
//simple example
//function cube($n)
//{
//    return($n * $n * $n);
//}
//
//$a = array(1, 2, 3, 4, 5);
//$b = array_map("cube", $a);
//print_r($b);
//second simple example
 $array=[10, 20, 30];
 function multiple_array_values($value){
     return $value*2;
 }
 $result=array_map("multiple_array_values",$array);
 print_r($result);

 //haw it's works behind
function example($array){
    $result=[];
    foreach ($array as $value){
        $result[]=$value*2;
    }
    return $result;
}
$result=example($array);
print_r($result);