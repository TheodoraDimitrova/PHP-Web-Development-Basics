<?php

class Car
{
//Model, fuel amount, fuel cost for 1 kilometer and distance traveled
    public $model;
    public $fuelAmount;
    public $fuelCostPerKm;
    public $distanceTraveled;

    public function __construct($model, $fuelAmount, $fuelCostPerKm)
    {
        $this->setModel($model);
        $this->setFuelAmount($fuelAmount);
        $this->setFuelCostPerKm($fuelCostPerKm);
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function setFuelAmount($fuelAmount)
    {
        $this->fuelAmount = $fuelAmount;
    }

    public function setFuelCostPerKm($fuelCostPerKm)
    {
        $this->fuelCostPerKm = $fuelCostPerKm;
    }

    public function setDistanceTraveled($distanceTraveled)
    {
        $this->distanceTraveled = $distanceTraveled;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getFuelAmount()
    {
        return $this->fuelAmount;
    }

    public function getFuelCostPerKm()
    {
        return $this->fuelCostPerKm;
    }

    public function getDistanceTraveled()
    {
        return $this->distanceTraveled;
    }

    // implement a method in the Car class to calculate whether or not a
    // car can move that distance, if it can the car’s fuel amount should be reduced
    // by the amount of used fuel and its distance traveled should be increased by the amount
    //of kilometers traveled, otherwise the car should not move (Its fuel amount
    // and distance traveled should stay the same) and you should print on the console “Insufficient fuel for the drive
    public function CalculateDistance($distanceTraveled, $fuelCostPerKm, $fuelAmount)
    {
        $need = $distanceTraveled * $fuelCostPerKm;
        if ($need <= $fuelAmount) {
            return $this->fuelAmount = $fuelAmount - $need;
        } else {
            return $this->fuelAmount;
        }

    }
}