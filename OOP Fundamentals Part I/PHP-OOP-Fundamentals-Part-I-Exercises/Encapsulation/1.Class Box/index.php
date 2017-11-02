<?php
use Box\Box;
include 'Box.php';
$length = floatval(trim(fgets(STDIN)));
$width = floatval(trim(fgets(STDIN)));
$height = floatval(trim(fgets(STDIN)));
echo $first=new Box($length,$width,$height);
echo PHP_EOL;

