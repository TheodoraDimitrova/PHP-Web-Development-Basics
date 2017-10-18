<?php
include 'Carr.php';
include 'Engine.php';
$n = trim(fgets(STDIN));
$arrEng=[];
for ($i = 1; $i <= $n; $i++) {
    $lineEngine = explode(" ", trim(fgets(STDIN)));
    // print_r($lineEngine);

    $model = $lineEngine[0];
    $power = $lineEngine[1];
    $displacement="";
    $efficiency="";
    if (count($lineEngine) == 3) {
        if (ctype_digit($lineEngine[2])) {
            $displacement = $lineEngine[2];
        } else {
            $efficiency = $lineEngine[2];
        }
    } else {
        $displacement = $lineEngine[2];
        $efficiency =$lineEngine [3];
    }
$arrEng[]=new Engine($model, $power, $displacement, $efficiency);

}
print_r($arrEng);
$num = trim(fgets(STDIN));
$arrCars=[];
for ($i = 1; $i <= $num; $i++) {
    $lineCar = explode(" ", trim(fgets(STDIN)));
    // print_r($lineCar);
    $model = $lineCar[0];
    $engine =$lineCar[1];
    $weight="";
    $color="";
    if(count($lineCar)==3){
        if(ctype_digit($lineCar[2])){
            $weight=$lineCar[2];
        }else{
            $color=$lineCar[2];
        }
    }elseif(count($lineCar)==4){
        $weight=$lineCar[2];
        $color=$lineCar[3];

    }
    $arrCars[]= new Carr($model, $engine, $weight, $color);
}
//print_r($arrCars);
foreach ($arrCars as $objCar){
    echo $objCar->model.":".PHP_EOL;
    echo $objCar->engine.":".PHP_EOL;
   foreach ($arrEng as $objEng){
       if($objEng->model==$objCar->engine){
          echo $objEng;
       }

   }
   echo $objCar;
}