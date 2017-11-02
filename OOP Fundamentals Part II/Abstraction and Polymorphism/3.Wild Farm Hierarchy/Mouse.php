<?php


namespace Farm;


class Mouse extends Mammal
{
    public function __construct($name, $animalType, $animalWeight, $foodEaten,$livingRegion)
    {
        parent::__construct($name, $animalType, $animalWeight,$foodEaten, $livingRegion);
    }

    public function makeSound()
    {
        return "SQUEEEAAAK!";
    }

    public function eat(Food $food)
    {
        parent::eat($food);
    }



}