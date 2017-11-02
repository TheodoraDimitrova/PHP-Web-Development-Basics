<?php

namespace Farm;


abstract class Food
{
    protected $quantity;

    public function __construct($quantity)
    {
        $this->setQuantity($quantity);
    }


    abstract public function setQuantity($quantity);
    abstract public function getQuantity();


}