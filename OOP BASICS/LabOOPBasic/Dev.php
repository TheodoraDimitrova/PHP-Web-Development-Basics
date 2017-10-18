<?php

class Dev
{
    public $numOne;
    public $numTwo;

    public function __construct($numOne, $numTwo)
    {
        $this->setNumOne($numOne);
        $this->setNumTwo($numTwo);
    }

    public function setNumOne($numOne)
    {

        $this->numOne = $numOne;
    }

    public function setNumTwo($numTwo)
    {
        $this->math_check_if_zero($numTwo);
        $this->numTwo = $numTwo;
    }

    function math_check_if_zero($x)
    {
        if ($x == 0) {
            echo "division by zero is not possible";
            exit;
        }

    }
    function dev()
    {
        return $this->numOne / $this->numTwo;
    }
}