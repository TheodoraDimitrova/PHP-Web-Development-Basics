<?php
namespace Farm;


class Meat extends Food
{

    public function setQuantity($quantity)
    {
        $this->quantity=$quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }


}