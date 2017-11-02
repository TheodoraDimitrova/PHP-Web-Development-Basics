<?php
namespace Farm;


class Tiger extends Felime//Tigers accept only Meat
{
  public function __construct($name, $animalType, $animalWeight, $foodEaten, $livingRegion)
  {
      parent::__construct($name, $animalType, $animalWeight, $foodEaten, $livingRegion);
  }

    public function makeSound()
    {
       return "Grrrrr".PHP_EOL;
    }
    public function eat(Food $food)
    {
        if(get_class($food)=="Meat" || get_class($food)=="Vegetable" ){
            $this->foodEaten=$food->getQuantity();
        }
        else{
           echo "{$this->animalType} are not eating that type of food!".PHP_EOL;
            $this->foodEaten=0;
        }
    }

}