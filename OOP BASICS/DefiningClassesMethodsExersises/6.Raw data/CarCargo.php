<?php

class CarCargo
{
// модел, двигател, товар и колекция от точно 4 гуми
    public $model;
    public $EngineSpeed;
    public $EnginePower;
    public $CargoWeight;
    public $tiresCollection;

    public function __construct( string $model, int $EngineSpeed,int $EnginePower,int $CargoWeight,array $tiresCollection)
    {
        $this->model = $model;
        $this->EngineSpeed = $EngineSpeed;
        $this->EnginePower = $EnginePower;
        $this->CargoWeight = $CargoWeight;
        $this->tiresCollection = $tiresCollection;
    }



}