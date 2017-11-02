<?php


namespace Farm;


class Mammal extends Animal
{
    protected $livingRegion;

    public function __construct($name, $animalType, $animalWeight, $foodEaten, $livingRegion)
    {
        parent::__construct($name, $animalType, $animalWeight, $foodEaten);
        $this->setLivingRegion($livingRegion);
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setAnimalType($animalType)
    {
        $this->animalType = $animalType;
    }
    public function setAnimalWeight($animalWeight)
    {
        $this->animalWeight = $animalWeight;
    }
    public function setFoodEaten($foodEaten)
    {
        $this->foodEaten = $foodEaten;
    }
    public function setLivingRegion($livingRegion)
    {
        $this->livingRegion = $livingRegion;
    }


    public function makeSound()
    {
        // TODO: Implement makeSound() method.
    }

    public function eat(Food $food)
    {
        $this->foodEaten=$food->getQuantity();
    }

    public function __toString()//{AnimalType} [{AnimalName}, {CatBreed}, {AnimalWeight}, {AnimalLivingRegion}, {FoodEaten}]
    {
        return $this->animalType ."[".$this->name." ,".$this->animalWeight." ,".$this->livingRegion." ,".$this->foodEaten."]";
    }


}