<?php

use Farm\Food;
use Farm\Vegetable;
use Farm\Meat;
use Farm\Animal;
use Farm\Mammal;
use Farm\Mouse;
use Farm\Felime;
use Farm\Zebra;
use Farm\Cat;
use Farm\Tiger;

include 'Food.php';
include 'Vegetable.php';
include 'Meat.php';
include 'Animal.php';
include 'Mammal.php';
include 'Felime.php';
include 'Mouse.php';
include 'Zebra.php';
include 'Cat.php';
include 'Tiger.php';
$infoAnimal = trim(fgets(STDIN));

while ($infoAnimal != 'End') {
    $infoFood = trim(fgets(STDIN));
    $infoFood = explode(" ", $infoFood);
    $typeFood = $infoFood[0];
    $quantityFood = $infoFood[1];
    if ($typeFood == "Vegetable") {
        $food = new Vegetable($quantityFood);
    } else {
        $food = new Meat($quantityFood);
    }
    $infoAnimal = explode(" ", $infoAnimal);
    $typeAnimal = $infoAnimal[0];
    if (count($infoAnimal) == 4) {//jivotni

        if ($typeAnimal == "Mouse") {
            $mouse = new Mouse($infoAnimal[1], $typeAnimal, $infoAnimal[2], $food, $infoAnimal[3]);
            echo $mouse->makeSound();
           // print_r($mouse);
            echo $mouse;
        } elseif ($typeAnimal == "Felime") {
            $flime = new Felime($infoAnimal[1], $typeAnimal, $infoAnimal[2], $food, $infoAnimal[3]);
            echo $flime->makeSound();
           // print_r($flime);
            echo $flime;
        } elseif ($typeAnimal == "Zebra") {
            $zebra = new Zebra($infoAnimal[1], $typeAnimal, $infoAnimal[2], $food, $infoAnimal[3]);
            echo $zebra->makeSound();
            //print_r($zebra);
           echo $zebra;

        } elseif ($typeAnimal == "Tiger") {
            $tiger = new Tiger($infoAnimal[1], $typeAnimal, $infoAnimal[2], $food, $infoAnimal[3]);
            echo $tiger->makeSound();
            //print_r($tiger);
            echo $tiger;
        }
    } else {//kotki
        if ($typeAnimal == "Cat") {//$name, $animalType, $animalWeight, $foodEaten, $livingRegion,$breed)
            $cat = new Cat($infoAnimal[1], $typeAnimal, $infoAnimal[2], $food, $infoAnimal[3], $infoAnimal[4]);
            echo $cat->makeSound();
            // print_r($cat);
           echo $cat;
        }

    }
    $infoAnimal = trim(fgets(STDIN));
}
