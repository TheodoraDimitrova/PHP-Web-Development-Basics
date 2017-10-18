<?php

class Carrr
{
    private $CarModel;
   private $carSpeed;

    public function __construct(string  $CarModel, int $carSpeed)
    {
        $this->CarModel = $CarModel;
        $this->carSpeed = $carSpeed;
    }

    function __toString()
    {
      return "{$this->CarModel} {$this->carSpeed}";
    }

}