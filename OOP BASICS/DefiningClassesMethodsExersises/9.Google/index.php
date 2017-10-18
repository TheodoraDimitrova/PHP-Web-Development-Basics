<?php //ne e dovurshena

include 'Company.php';
include 'Carrr.php';
include 'Parents.php';
include 'Pokemon.php';
include 'Children.php';
$line = trim(fgets(STDIN));
$result = [];


while ($line != "End") {
    $lineArr = explode(" ", $line);

    $name = $lineArr[0];
    $classType = $lineArr [1];
    if ($classType == 'company') {
        $companyName = $lineArr[2];
        $department = $lineArr[3];
        $salary = $lineArr[4];
        $classType  = new Company($companyName, $department, $salary);

    } elseif ($classType == 'car') {
        $carModel = $lineArr[2];
        $carSpeed = $lineArr[3];
        $classType= new Carrr($carModel, $carSpeed);
    } elseif ($classType == 'pokemon') {
        $pokemonName = $lineArr[2];
        $pokemonType = $lineArr[3];
        $classType= new Pokemon($pokemonName, $pokemonType);

    } elseif ($classType == 'parents ') {
        $parentName = $lineArr[2];
        $parentBirthday = $lineArr[3];
        $classType = new Parents($parentName, $parentBirthday);

    } elseif ($classType == 'children') {
        $childName = $lineArr[2];
        $childBirthday = $lineArr[3];
        $classType = new Children($childName, $childBirthday);

    }
    if (!array_key_exists($name, $result)) {


        $result[$name] =[];
        $result[$name][]=$classType;

    } else {

        $result[$name][]=$classType;

    }




   $line = trim(fgets(STDIN));
}
$nameLine = trim(fgets(STDIN));
print_r($result);


//TonchoTonchev
//Company:
//Car:
//Trabant 30
//Pokemon:
//Electrode Electricity
//Parents:
//Children:
