<?php
namespace Cats;


class StreetExtraordinaire
{
    protected $name;
    protected $breed;
    protected $age;


    public function __construct($name, $breed,$age)
    {
        $this->name = $name;
        $this->breed = $breed;
        $this->age=$age;
    }
    public function __toString()
    {
        return $this->breed." ".$this->name." ".$this->age;
    }





}