<?php

use Pizza\Dough;
use Pizza\Topping;
use Pizza\Pizza;

include 'Dough.php';
include 'Topping.php';
include 'Pizza.php';


try {
    $lineName = trim(fgets(STDIN));
    $lineName = explode(" ", $lineName);
    $name = $lineName[1];
    if ($lineName[2] > 0 && $lineName[2] < 10) {
        $numToppingsLines = $lineName[2];
    } else {
        throw new Exception('Number of toppings should be in range [0..10].');
    }


    $lineDough = trim(fgets(STDIN));
    $lineDough = explode(" ", $lineDough);
    $baseType = $lineDough[1];
    $bakingTechnique = $lineDough[2];
    $weightGrams = $lineDough[3];
    $dough = new Dough($baseType, $bakingTechnique, $weightGrams);//testo obekt

    $toppings = [];
    for ($i = 0; $i < $numToppingsLines; $i++) {
        $lineTopping = trim(fgets(STDIN));
        $lineTopping = explode(" ", $lineTopping);
        $typeTopping = $lineTopping[1];
        $gramsTopping = $lineTopping[2];

        $toppings[$typeTopping] = new Topping($typeTopping, $gramsTopping);//obekt toping

    }
   $pizza = new Pizza($name, $toppings, $dough);
    foreach ($toppings as $top) {
        $pizza->addTopping($top->getCalTopping());
    }
   echo $pizza->getName()." - ". $pizza->getTotalCalories()." Calories.";



} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
}
