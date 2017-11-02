<?php
use Iperson\Citizen;
use Iperson\iDentifiable;
use Iperson\iBirthable;
include "iPerson.php";
include "iDentifiable.php";
include 'iBirthable.php';
include "Citizen.php";

$az=new Citizen("Teddy",27,12345,"24.04.1990");
echo $az;
echo PHP_EOL;
echo $az->setIdBirtdate(12345,"24.04.1990");