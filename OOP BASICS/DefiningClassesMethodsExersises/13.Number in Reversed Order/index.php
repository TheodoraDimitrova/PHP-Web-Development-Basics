<?php
use DecimalNumber\DecimalNumber;
include 'DecimalNumber.php';
$num=trim(fgets(STDIN));
$numReversed=new DecimalNumber();
 echo $numReversed->reversedOrder($num);