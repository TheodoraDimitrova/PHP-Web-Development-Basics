<?php
class Car
{
    public $brand;
    public $model;
    public $year;

    public function __construct(string $brand, string $model)
    {
        $this->brand = $brand;
        $this->model = $model;

    }
    public function setYear(int $year)
    {
        if($year!=is_numeric($year)){
            echo "The year must be number of type int";
        }
        $this->year = $year;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }
    public function getModel(): string
    {
        return $this->model;
    }

    public function getYear(): int
    {
        return $this->year;
    }


}
