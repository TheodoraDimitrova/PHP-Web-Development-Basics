<?php


namespace Farm;


class Zebra extends Mammal

{


    public function makeSound()
    {
       return "ZZZZZzzzz";
    }

    public function eat(Food $food)
    {
        parent::eat($food);
    }
    public function __toString()//{AnimalType} [{AnimalName}, {CatBreed}, {AnimalWeight}, {AnimalLivingRegion}, {FoodEaten}]
    {
        return parent::__toString(); // TODO: Change the autogenerated stub
    }
}