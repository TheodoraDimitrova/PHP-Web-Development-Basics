<?php

namespace Shopping;


class Product
{ //Name cannot be an empty string. Money cannot be a negative number
   private $name;
    private $cost;

    public function __construct($name, $cost)
    {
        $this->setName($name);
        $this->setCost($cost);
    }

    public function setName($name)
    {
        if ($name == '') {
            throw new \Exception('The name of product can not be empty string');
        }
        $this->name = $name;
    }

    public function setCost($cost)
    {
        if ($cost < 0) {
            throw new \Exception('The price cat not be negative number');
        }
        $this->cost = $cost;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCost()
    {
        return $this->cost;
    }

}