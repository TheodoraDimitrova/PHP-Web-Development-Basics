<?php

class Engine
{
//An Engine has model, power, displacement and efficiency
    public $model;
    public $power;
    public $displacement;
    public $efficiency;


    public function __construct($model, $power, $displacement = 0, $efficiency = '')
    {
        $this->model = $model;
        $this->power = $power;
        $this->displacement = $displacement;
        $this->efficiency = $efficiency;
    }


    public function setDisplacement(int $displacement)
    {
        if ($displacement == 0) {
            return $displacement = "n/a";
        }
        return $this->displacement = $displacement;
    }

    public function setEfficiency(string $efficiency)
    {
        if ($efficiency == null) {
            return $efficiency = "n/a";
        }
        return $this->efficiency = $efficiency;
    }


    function __toString()
    {
        return "Power: " . $this->power . PHP_EOL . "Displacement: " . $this->displacement . PHP_EOL . "Efficiency: " . $this->efficiency . PHP_EOL;
    }


}