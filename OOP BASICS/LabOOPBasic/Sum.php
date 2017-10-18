<?php

class Sum
{
    public $numOne;
    public $numTwo;
    public function __construct($numOne, $numTwo)
    {
        $this->numOne = $numOne;
        $this->numTwo = $numTwo;
    }
    function math_sum()
    {
        return $this->numOne + $this->numTwo;
    }
}