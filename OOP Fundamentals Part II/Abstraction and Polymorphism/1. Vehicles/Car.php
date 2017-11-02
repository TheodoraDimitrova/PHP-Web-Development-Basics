<?php

namespace Vehicle;


class Car extends Vehicle
{
    public function __construct($fuelQuantity, $fuelLitersPerKm, $tankCapacity)
    {
        parent::__construct($fuelQuantity, $fuelLitersPerKm, $tankCapacity);
    }

    public function setFuelLitersPerKm($fuelLitersPerKm)
    {
        $this->fuelLitersPerKm = $fuelLitersPerKm + 0.9;
    }


    public function setDrivingDistance($drivingDistance)
    {
        if ($drivingDistance * $this->fuelLitersPerKm < $this->fuelQuantity) {
            echo "Car travelled " . $drivingDistance . 'km';
            $this->fuelQuantity -= $drivingDistance * $this->fuelLitersPerKm;
            $this->drivingDistance += $drivingDistance;
        } else {
            echo "Car needs refueling" . PHP_EOL;
        }

    }

    public function setRefuel($refuel)
    {
        if ($refuel < 0) {
            echo "Fuel must be a positive number." . PHP_EOL;
        }
        if ($refuel <= $this->tankCapacity) {
            $this->tankCapacity += $refuel;
        } else {
            echo "Cannot fit fuel in tank" . PHP_EOL;
        }


    }

    public function __toString()
    {
        return "Car : " . number_format($this->fuelQuantity, 2);
    }


}