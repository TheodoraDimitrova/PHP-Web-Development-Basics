<?php

class Ferrari implements Ferrari\iFerrari
{
    private $model = "488-Spider";
    private $driver;
    private static $objNum ;


    public function __construct()
    {
        self::$objNum++;
    }


    public function setDriver($driver)
    {
        $this->driver = $driver;
    }

    public function useBreaks()
    {
       return "Brakes!";
    }
    public function pushTheGasPedal()
    {
        return"Zadu6avam sA!";
    }

    public function __toString()
    {
        //<model>/<brakes>/<gas pedal>/<driver's name>
        return $this->model."/".$this->useBreaks()."/".$this->pushTheGasPedal()."/".$this->driver."/  inst. ".self::$objNum;
    }

    public static function forUrl(string $str, string $rep="-")  {

    }

}