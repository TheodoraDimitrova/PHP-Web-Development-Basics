<?php

namespace Inheritance;


class Bicycle extends Vehicle
{
    private $brand;
    private $model;
    private $year;
    private $forSkirt=null;

    public function __construct($color,$brand, $model, $year, $forSkirt=null)
    {
        parent::__construct($numberDoors='' , $color);
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->checkSkirt($forSkirt);
    }
    protected function setNumberDoors(string $numberDoors)
    {
        $this->numberDoors ='no doors';
    }
    public function getForSkirt()
    {
        return $this->forSkirt;
    }


    public function checkSkirt($forSkirt)
    {
        if ($forSkirt != null) {
            return $this->forSkirt = 'yes';
        }
        return $this->forSkirt='No';

    }


    public function __toString()
    {
        return "Bicycle Color is  {$this->color}, brand is  {$this->brand}, the model is {$this->brand} year {$this->year},there is a skirt : {$this->forSkirt}";
    }


}