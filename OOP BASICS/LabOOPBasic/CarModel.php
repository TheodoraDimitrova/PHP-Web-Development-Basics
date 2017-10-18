<?php
class CarModel extends Car {
    public $engine;
    public $numberOfSeats;
    public $horsepower;


    public function __construct( $brand, $model, $year, $engine, $numberOfSeats, $horsepower)
    {
        parent::__construct($brand, $model);
        parent::setYear($year);
        $this->engine = $engine;
        $this->numberOfSeats = $numberOfSeats;
        $this->horsepower = $horsepower;
    }

}