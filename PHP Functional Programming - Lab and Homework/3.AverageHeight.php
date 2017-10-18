<?php
//function myfunction($v1,$v2)
//{
//    return $v1 . "-" . $v2;
//}
//$a=array("Doncky","Cat","Horse");
//print_r(array_reduce($a,"myfunction"));
function sum($carry, $p)//carry Holds the return value of the previous iteration;
{
    $carry += $p['height'];
   // echo $carry; 1.65 purvi put
    return $carry;
}

$people = [
    ['name'=> 'John'  , 'height'=> 1.65],
    ['name'=> 'Peter' , 'height'=> 1.85],
    ['name'=> 'Silvia', 'height'=> 1.69],
    ['name'=> 'Martin', 'height'=> 1.82]
];

$k = 0;
$k = array_reduce($people ,"sum");

print_r($k/count($people));



