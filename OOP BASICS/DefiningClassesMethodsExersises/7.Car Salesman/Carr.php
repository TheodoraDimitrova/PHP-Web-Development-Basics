<?php

class Carr
{
    public $model;
    public $engine;
    public $weight;
    public $color;

    public function __construct($model, $engine, $weight=0, $color="")
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->setWeight($weight);
        $this->setColor($color);
    }
    public function setWeight($weight)
    {

        if($weight==null){
            $this->weight="n/a";
        }else{
            $this->weight = $weight;
        }
    }
    public function setColor($color)
    {
        if($color==null){
            $this->color="n/a";
        }else{
            $this->color = $color;
        }


    }

    function __toString()
    {
        return 'Weight: '.$this->weight.PHP_EOL.'Color: '.$this->color.PHP_EOL;
    }


}