<?php

namespace Pizza;


class Dough
{
    private $type;
    private $bakingTech;
    private $weightInGrams;
    static $cal = 2;

    public function __construct(string $baseType, string $bakingTechnique, int $weightInGrams)
    {
        $this->setBaseType($baseType);
        $this->setBakingTech($bakingTechnique);
        $this->setWeightInGrams($weightInGrams);
    }

    public function setWeightInGrams($weightInGrams)
    {
        if ($weightInGrams > 200 || $weightInGrams < 0) {
            throw new \Exception('Dough weight should be in the range [1..200].');
        } else {
            $this->weightInGrams = $weightInGrams;
        }

    }
    public function setBaseType($baseType)
    {
        if (strtolower($baseType)== strtolower('white')) {
            $this->type = 1.5;
        } elseif (strtolower($baseType) == strtolower('wholegrain')) {
            $this->type = 1.0;
        } else {
            throw new \Exception('Invalid type of dough.');
        }

    }
    public function setBakingTech($bakingTechnique)
    {
        if (strtolower($bakingTechnique) ==(strtolower('crispy')) ) {
            $this->bakingTech = 0.9;
        } elseif (strtolower($bakingTechnique) == strtolower('chewy')) {
            $this->bakingTech = 1.1;
        } elseif (strtolower($bakingTechnique )== strtolower('homemade')) {
            $this->bakingTech = 1.0;
        }

    }


    public function getCalDough(){
        return number_format(($this::$cal*$this->weightInGrams)*$this->type*$this->bakingTech,2);
    }

}