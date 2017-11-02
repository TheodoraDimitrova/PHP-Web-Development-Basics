<?php

namespace relationships;


class Car
{
    private $color;
    private $maxSpeed;


    public function __construct(string $color, int $maxSpeed)
    {
        $this->setColor($color);
        $this->setMaxSpeed($maxSpeed);
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function setMaxSpeed(int $maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    public function getInfo()
    {
        return "Car color : " . $this->getColor() . "Max Speed : " . $this->getMaxSpeed();
    }

}