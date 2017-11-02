<?php
use Inheritance\Vehicle;
use Inheritance\Car;
use Inheritance\Bicycle;
include 'Vehicle.php';
include 'Car.php';
include 'Bicycle.php';

$myCar=new Car('4 doors','blue','Audi',' A4 ',2012);
$myCar->paint('green');

//print_r($myCar);
//print_r(get_class_methods($myCar));
$myBicycle=new Bicycle('red','BMX','BM',2019);
//echo $myBicycle;
print_r($myBicycle);