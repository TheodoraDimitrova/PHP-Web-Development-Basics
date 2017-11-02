<?php

use Vehicle\Vehicle;
use Vehicle\Car;
use Vehicle\Truck;
use Vehicle\Bus;

include 'Vehicle.php';
include 'Car.php';
include 'Truck.php';
include 'Bus.php';
$carInfo = trim(fgets(STDIN));
$truckInfo = trim(fgets(STDIN));
$busInfo = trim(fgets(STDIN));

$carInfo = explode(" ", $carInfo);
$carFuelQuan = $carInfo[1];
$carLiterPerKm = trim($carInfo[2]);
$carCapacity = $carInfo[3];
$car = new Car($carFuelQuan, $carLiterPerKm, $carCapacity);

$truckInfo = explode(' ', $truckInfo);
$truckFuelQuan = $truckInfo[1];
$truckLiterPerkm = trim($truckInfo[2]);
$truckCapacity = $truckInfo[3];
$truck = new Truck($truckFuelQuan, $truckLiterPerkm, $truckCapacity);

$busInfo = explode(" ", $busInfo);
$busFuelQuan = $busInfo[1];
$busLiterPerKm = $busInfo[2];
$busCapacity = $busInfo[3];
$bus = new Bus($busFuelQuan, $busLiterPerKm, $busCapacity);


$n = fgets(STDIN);
for ($i = 1; $i <= $n; $i++) {
    $command = fgets(STDIN);
    $command = explode(" ", $command);
    $com = $command[0];
    $typeVehicle = $command[1];
    $distance = trim($command[2]);
    if ($com == 'Drive') {//o	Drive
        if ($typeVehicle == "Car") {
            $car->setDrivingDistance($distance);
        } elseif ($typeVehicle == "Truck") {
            $truck->setDrivingDistance($distance);

        } else {//bus
            $bus->setDrivingDistance($distance);
        }
    } elseif ($com == "Refuel") {//o	Refuel
        if ($typeVehicle == "Car") {
            $car->setRefuel($distance);

        } elseif ($typeVehicle == "Truck") {
            $truck->setRefuel($distance);

        } else {//Bus
            $truck->setRefuel($distance);
        }
    } else {//o	DriveEmpty Bus
        $bus->setFuelLitersPerKm($distance - 1.4);

    }
}
echo $car . PHP_EOL;
Echo $truck . PHP_EOL;
echo $bus . PHP_EOL;



