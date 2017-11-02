<?php

namespace Vehicle;


abstract class Vehicle
{
    protected $fuelQuantity;//количество гориво
    protected $fuelLitersPerKm;//консумация на гориво в литри на километър
    protected $drivingDistance;//могат да се управляват на дадено разстояние
    protected $tankCapacity;//капацитет на резервоара

    public function __construct($fuelQuantity, $fuelLitersPerKm,$tankCapacity)//kolko ima, kolko gori,kolko e rezervoara
    {
        $this->fuelQuantity = $fuelQuantity;
        $this->setFuelLitersPerKm($fuelLitersPerKm);
        $this->setRefuel($tankCapacity);
        $this->tankCapacity=$tankCapacity;
    }


    abstract public function setFuelLitersPerKm($fuelLitersPerKm);

    abstract public function setDrivingDistance($drivingDistance);

    abstract public function setRefuel($refuel);


}