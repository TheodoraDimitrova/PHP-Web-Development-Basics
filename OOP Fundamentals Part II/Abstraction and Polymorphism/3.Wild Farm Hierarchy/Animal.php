<?php

namespace Farm;


abstract class Animal
{
    protected $name;
    protected $animalType;
    protected $animalWeight;
    protected $foodEaten;

    public function __construct($name, $animalType, $animalWeight, $foodEaten)
    {
        $this->setName($name);
        $this->setAnimalType($animalType);
        $this->setAnimalWeight($animalWeight);
        $this->eat( $foodEaten);
    }

    abstract public function setName($name);
    abstract public function setAnimalType($animalType);
    abstract public function setAnimalWeight($animalWeight);



    abstract public function makeSound();
    abstract public function eat(Food $food);


}