<?php

namespace Factory;


class FoodFactory
{

    static private $pints=0;

    public function __construct($food)
    {
        $this->setFood($food);

    }
    public function setFood($food)
    {
        if($food==strtolower('Cram')){
            $this::$pints= 2;
        }elseif ($food==strtolower("Lembas")){
            $this::$pints+=3;
        }elseif ($food==strtolower('Apple')){
            $this::$pints+=1;
        }elseif ($food==strtolower('Melon')){
            $this::$pints+=1;
        }elseif ($food==strtolower('HoneyCake')){
            $this::$pints+=5;
        }else{
            $this::$pints-=1;
        }

    }


    public static function getPints(): int
    {
        return self::$pints;
    }
}