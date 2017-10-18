<?php

namespace Car;


class Car
{
    private $speed;
    private $fuel;
    private $fuelEconomy;
    private $distanceTraveled = 0.;
    private $timeTraveled = 0.;
    private $minutesPerKm = 0.;
    private $fuelPerKm = 0.;

    public function __construct(int $speed,float $fuel,float $fuelEconomy)
    {
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->fuelEconomy = $fuelEconomy;
    }


    public function Travel($distance)
    {
       return $this->distanceTraveled=$distance;
    }
    public function getDistanceTraveled(): float
    {
        return $this->distanceTraveled;
    }

    public function Refuel($liters){
        return $this->fuel+=$liters;
    }
    public function getFuel(): float
    {
        return $this->fuel;
    }

}