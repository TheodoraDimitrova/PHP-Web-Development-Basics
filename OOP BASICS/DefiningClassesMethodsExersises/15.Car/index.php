<?php //ne dovurshena zadacha

use Car\Car;

include 'Car.php';
$info = trim(fgets(STDIN));
$info = explode(" ", $info);
$speed = $info[0];//skorost za chas
$fuel = $info[1];//nalichno gorivo
$fuelEconomy = $info[2];//kolko gori na 100 km
$car=new Car($speed,$fuel,$fuelEconomy);

$line = explode(" ", trim(fgets(STDIN)));
while ($line[0] != 'End') {

    if ($line[0] == 'Travel') {
        $distance=$line[2];
        $car->Travel($distance);

    } elseif ($line[0] == 'Refuel') {
        $liters=$line[1];
        $car->Refuel($liters);

    } elseif ($line[0] == 'Distance') {

    } elseif ($line[0] == 'Time') {

    } elseif ($line[0] == 'Fuel') {

    }
    $line = explode(" ", trim(fgets(STDIN)));
}

