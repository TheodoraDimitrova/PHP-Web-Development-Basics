<?php

namespace Pizza;


class Pizza
{
    private $name;
    private $toppings;
    private $dough;//180
    private $allToppings;

    public function __construct($name, array $topping, Dough $dough)
    {
        $this->setName($name);
        $this->setToppings($topping);
        $this->setDough($dough);
    }

    public function getToppings()
    {
        return $this->toppings;
    }


    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setToppings($toppings)
    {
        $this->toppings = $toppings;
    }

    public function setDough(Dough $dough)
    {
        $this->dough = $dough->getCalDough();
    }


    public function getName()
    {
        return $this->name;
    }

    public function getNumberToppings()
    {
        return count($this->toppings);
    }

    public function addTopping($topping){
        $this->allToppings+=$topping;
    }

    public function getTotalCalories()
    {
        return number_format($this->dough+$this->allToppings,2);
    }


}