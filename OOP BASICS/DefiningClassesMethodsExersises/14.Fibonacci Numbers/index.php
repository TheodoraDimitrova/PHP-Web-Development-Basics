<?php

include 'Fibonacci.php';
$start=trim(fgets(STDIN));
$end=trim(fgets(STDIN));
$result=new Fibonacci($end);
echo implode(", ",$result->getNumbersInRange($start,$end));