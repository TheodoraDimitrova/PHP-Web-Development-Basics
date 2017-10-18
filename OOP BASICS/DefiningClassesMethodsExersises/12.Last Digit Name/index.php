<?php
use LastDigitName\Number;
include 'Number.php';
$num=trim(fgets(STDIN));
$num=new Number($num);
 echo $num->EnglishNameOfDigit();