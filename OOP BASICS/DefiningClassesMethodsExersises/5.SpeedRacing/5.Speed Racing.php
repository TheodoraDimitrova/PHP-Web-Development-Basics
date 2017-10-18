<?php
include 'Car.php';
//“<Model> <FuelAmount>(nalichnost) <FuelCostFor1km>(kolko gori za kilometur)”
$numOfCars = trim(fgets(STDIN));
$carsArray=[];
for ($i = 1; $i <= $numOfCars; $i++) {
    $line=explode(" ",trim(fgets(STDIN)));
    $model=$line[0];
    $fuelAmount=$line[1];
    $fuelCostPerKm=$line[2];
    $carsArray[]=new Car($model,$fuelAmount, $fuelCostPerKm);
}
//print_r($carsArray);
$command=trim(fgets(STDIN));

$carTravel=[];//[Ferrari-488Spider] => 132
             //[AudiA4] => 135
while ($command !="End") {
    //“Drive  <CarModel>  <amountOfKm>”
    $command=explode(" ",$command);
    $carModel=$command[1];
    $amountOfKm=$command[2];
    if(!array_key_exists($carModel,$carTravel)){
        $carTravel[$carModel]=$amountOfKm;
    }else{
        $carTravel[$carModel]+=$amountOfKm;
    }
    $command = trim(fgets(STDIN));
}

foreach ($carsArray as $car){
    if(array_key_exists($car->model, $carTravel)){
        $car->setDistanceTraveled($carTravel[$car->model]);
    }else{
        $car->setDistanceTraveled(0);
    }
}
foreach ($carsArray as $car){
    echo $car->model." ";
    echo number_format($car->CalculateDistance($car->distanceTraveled, $car->fuelCostPerKm,$car ->fuelAmount),2)." ";
    echo $car->distanceTraveled.PHP_EOL;
}