<?php
use Polymorphism\Animal;
use Polymorphism\Cat;
use Polymorphism\Dog;
include "Animal.php";
include 'Cat.php';
include 'Dog.php';
$animals[]=new Animal();

$flufy =new Cat();
$sharo=new Dog();

$animals[]=$flufy;
$animals[]=$sharo;
foreach ($animals as $animal){
    echo $animal->makeNoise().PHP_EOL;
}
