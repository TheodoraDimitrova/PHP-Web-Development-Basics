<?php

namespace Inheritance;


class Car extends Vehicle
{
//brand, model, year
    private $brand;
    private $model;
    private $year;

    public function __construct(string $numberDoors, string $color, string $brand, string $model, int $year)

    {
        parent::__construct($numberDoors, $color);
        $this->brand = $brand;
        $this->model = $model;
        $this->setYear($year);
    }



    public function setBrand(string $brand)
    {
        $this->brand = $brand;
    }
    public function setModel(string $model)
    {
        $this->model = $model;
    }
    public function setYear(int $year)
    {
        $year_length = strlen((string)$year);
            if ($year_length == 4) {
                return $this->year = $year;//Pass
            }
              echo  'uncorect year ';

    }


    public function getBrand(): string
    {
        return $this->brand;
    }
    public function getModel(): string
    {
        return $this->model;
    }
    public function getYear()
    {
        return $this->year;
    }

    public function paint($paint_color)
    {
        $this->setColor($paint_color);
    }
}