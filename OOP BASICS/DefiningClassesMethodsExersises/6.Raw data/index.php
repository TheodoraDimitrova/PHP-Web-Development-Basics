<?php
include 'CarCargo.php';
include 'Cargo.php';
include 'Engine.php';
include 'Tires.php';
$amountCars = trim(fgets(STDIN));
$carCargo = [];
$engine = [];
$tires = [];

for ($i = 1; $i <= $amountCars; $i++) {
    $infCar = explode(" ", trim(fgets(STDIN)));
    //print_r($infCar);
    $model = $infCar[0];
    $engineSpeed = $infCar[1];
    $enginePower = $infCar[2];
    $cargoWeight = $infCar[3];
    $cargoType = $infCar[4];
    $tiresArr = array_slice($infCar, 5);

    //print_r($tires);
    $carCargo[] = new CarCargo($model, $engineSpeed, $enginePower, $cargoWeight, $tiresArr);
    $engine[] = new Engine($model, $engineSpeed, $enginePower, $cargoWeight, $tiresArr);
    $tires[] = new Tires($model, $engineSpeed, $enginePower, $cargoWeight, $tiresArr);
}

$command = trim(fgets(STDIN));


if ($command == 'flamable') {
    foreach ($engine as $objCar) {
        if ($objCar->checkEnginePower()) {
            echo $objCar->model . PHP_EOL;
        }

    }


} elseif ($command == 'fragile') {

    foreach ($tires as $obj) {

        $obj->setEachTire($obj->tiresCollection);

        if ($obj->checkPressure()) {

           echo $obj->model.PHP_EOL;
        }

    }
}



