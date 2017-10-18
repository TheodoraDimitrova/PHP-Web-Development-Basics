<?php
namespace Pokemon;


class Pokemon
{
 private $name;
 private $health;

    public function __construct($name, $health)
    {
        $this->name = $name;
        $this->health = $health;
    }

}