<?php

namespace Vehicle;


class Bus extends Vehicle

{

    public function __construct($fuelQuantity, $fuelLitersPerKm, $tankCapacity)
    {
        parent::__construct($fuelQuantity, $fuelLitersPerKm, $tankCapacity);
    }

    public function setFuelLitersPerKm($fuelLitersPerKm)
    {
        $this->fuelLitersPerKm = $fuelLitersPerKm + 1.4;
    }

    public function setDrivingDistance($drivingDistance)
    {
        if ($drivingDistance * $this->fuelLitersPerKm < $this->fuelQuantity) {
            echo "Bus travelled " . $drivingDistance . 'km'.PHP_EOL;
            $this->fuelQuantity -= $drivingDistance * $this->fuelLitersPerKm;
            $this->drivingDistance += $drivingDistance;
        } else {
            echo "Bus needs refueling" . PHP_EOL;
        }

    }

    public function setRefuel($refuel)
    {
        if($refuel<0){
            echo "Fuel must be a positive number.".PHP_EOL;
        }
        if ($refuel <= $this->tankCapacity) {
            $this->tankCapacity += $refuel;
        } else {
            echo "Cannot fit fuel in tank".PHP_EOL;
        }
    }


    public function __toString()
    {
        return "Bus: " . number_format($this->fuelQuantity, 2);
    }


}