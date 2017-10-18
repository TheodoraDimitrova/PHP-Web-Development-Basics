<?php
include 'Car.php';
include 'CarModel.php';
$cars=[];
for ($i=1; $i<=4; $i++){
    $input=trim(fgets(STDIN));
    $input=explode(" ",$input);
    $brand=$input[0];
    $model=$input[1];
    $year=$input[2];
    //print_r($input);
    $car=new Car($brand, $model);
    $car->setYear($year);
    $cars[]=$car;
}

function cmp($a, $b)
{
    if( strcmp($a->brand, $b->brand)){
        return strcmp($a->brand, $b->brand);
    }
    return strcasecmp($a->model, $b->model);
}

usort($cars, "cmp");
foreach ($cars as $car){

    echo $car->getBrand().", ".$car->getModel().", ".$car->getYear();
    echo PHP_EOL;
}
echo"Problem 5.	Add sub class".PHP_EOL;
$newCar=new CarModel("Citroen", "C4", 2007, 2000, 5, 200);
var_dump($newCar);