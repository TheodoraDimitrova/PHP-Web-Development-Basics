<?php

namespace Pizza;


class Topping
{
    protected $typeTopping;
    protected $weightTop;
    static $baseCal = 2;


    public function __construct($typeTopping, $weightTop)
    {
        $this->setTypeTopping($typeTopping);
        $this->setWeightTop($weightTop, $typeTopping);

    }


    public function setTypeTopping(string $typeTopping)
    {
        if (strtolower($typeTopping) == strtolower('meat')) {
            $this->typeTopping = 1.2;
        } elseif (strtolower($typeTopping) ==strtolower( 'veggies')) {
            $this->typeTopping = 0.8;
        } elseif (strtolower($typeTopping) == strtolower('cheese')) {
            $this->typeTopping = 1.1;
        } elseif (strtolower($typeTopping) == strtolower('sauce')) {
            $this->typeTopping = 0.9;
        } else {
            throw new \Exception("Cannot place {$typeTopping} on top of your pizza.");
        }

    }

    public function setWeightTop($weightTop, $typeTopping)
    {
        if ($weightTop > 1 && $weightTop <= 50) {
            $this->weightTop = $weightTop;
        } else {
            throw  new \Exception("{$typeTopping} weight should be in the range [1..50].");
        }

    }

    public function getTypeTopping()
    {
        return $this->typeTopping;
    }

    public function getWeightTop()
    {
        return $this->weightTop;
    }


    public function getCalTopping()
    {
        return number_format($this::$baseCal * $this->weightTop * $this->typeTopping, 2);
    }
}