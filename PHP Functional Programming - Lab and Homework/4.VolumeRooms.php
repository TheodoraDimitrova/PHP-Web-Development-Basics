<?php
//Напишете скрипт roomVolume.php, който изчислява обема на стаите в апартамент.
// За целта използвайте array_map () функция.
//array array_map ( callable $callback , array $array1 [, array $... ] )

$room = [
    'kithen'      => ['width'=> 3,'length'=>2, 'height' => 2.4],
    'living_room' => ['width'=> 6,'length'=>4, 'height' => 2.4],
    'bedroom'     => ['width'=> 5,'length'=>3, 'height' => 2.2],
];
$func=function ($value){
    $result= $value['width']*$value['length']*$value['height'];
    return $result;
};
$result=array_map($func,$room);
print_r($result);