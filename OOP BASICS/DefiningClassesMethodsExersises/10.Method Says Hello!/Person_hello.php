<?php

class Person
{
    public $name;
    public function __construct(string $name)
    {
        $this->name = $name;
        echo $this->name . ' says "Hello"!';
    }



}