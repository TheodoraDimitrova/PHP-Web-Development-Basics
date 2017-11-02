<?php
namespace Inheritance;

class Vehicle
{
    protected $numberDoors;
    protected $color;


    public function __construct(string $numberDoors,string $color)
    {
        $this->setNumberDoors($numberDoors);
        $this->setColor($color);
    }
    protected function setNumberDoors(string $numberDoors)
    {
        $this->numberDoors = $numberDoors;
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }
    public function getNumberDoors()
    {
        return $this->numberDoors;
    }

    public function getColor()
    {
        return $this->color;
    }
    public  function paint($color){
        $this->setColor($color);

    }

    public function __get($name)
    {

        return 'Prop not exist';
    }

    public function __set($name, $value)
    {
       // throw new \Exception('Undefined Property');
        echo "No such prop".PHP_EOL;
    }



}