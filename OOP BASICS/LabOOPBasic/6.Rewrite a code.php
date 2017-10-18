<?php
include 'Sum.php';
include "Dev.php";

$sum = new Sum(2,3);
echo $sum->math_sum();
echo PHP_EOL;
$dev=new Dev(1,2);
echo $dev->dev();