<?php

namespace Vehicle;


class Truck extends Vehicle
{

    public function __construct($fuelQuantity, $fuelLitersPerKm, $tankCapacity)
    {
        parent::__construct($fuelQuantity, $fuelLitersPerKm, $tankCapacity);
    }

    public function setFuelLitersPerKm($fuelLitersPerKm)
    {
        $this->fuelLitersPerKm = $fuelLitersPerKm + 1.6;
    }
    public function setDrivingDistance($drivingDistance)
    {

        if ($drivingDistance * $this->fuelLitersPerKm < $this->fuelQuantity) {
            echo "Truck travelled ".$drivingDistance.'km';
            $this->fuelQuantity -= $drivingDistance*$this->fuelLitersPerKm;
            $this->drivingDistance+=$drivingDistance;
        } else {
            echo "Truck needs refueling".PHP_EOL;
        }
    }

    public function setRefuel($refuel)
    {
        if($refuel<0){
            echo "Fuel must be a positive number.".PHP_EOL;
        }else{
            $this->tankCapacity += $refuel;
        }



    }

    public function __toString()
    {
        return "Truck : " . number_format($this->fuelQuantity, 2);
    }


}