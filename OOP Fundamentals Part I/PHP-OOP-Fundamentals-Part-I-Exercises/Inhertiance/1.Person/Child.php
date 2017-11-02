<?php


namespace Person;


class Child extends Person

{


    public function __construct(string $name, int $age)
    {
        parent::__construct($name,$age);
    }

    public function setAge($age)
    {
        if ($age > 16) {
            throw new \Exception("Child’s age must be less than 16!");
        }

        $this->age = $age;
    }
}