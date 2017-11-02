<?php
use Vehicle\Vehicle;
include 'Vehicle.php';
$myVehicle=new Vehicle("2 doors","orangle");
print_r($myVehicle);
 $myVehicle->setColor('red');
$myVehicle->setNumberDoors('5 doors');
print_r($myVehicle);


$myVehicle->paint('blue');
print_r($myVehicle);
$myVehicle->age=5;
echo PHP_EOL;
echo  $myVehicle->age;

