<?php

namespace Animals;


class Animal implements \iSound
{
    protected $type;
    protected $name;
    protected $age;
    protected $gender;


    public function __construct($type, $name, $age, $gender)
    {
        $this->setType($type);
        $this->setName($name);
        $this->setAge($age);
        $this->setGender($gender);
    }

    public function setType($type)
    {
        if ($type == 'Cat' || $type == "Frog" || $type == "Dog" || $type == "Kitten" || $type == "Tomcat") {
            $this->type = $type;
        } else {
            throw new \Exception('Invalid input');
        }

    }

    public function setName($name)
    {
        if (is_string($name)) {
            $this->name = $name;
        } else {
            throw new \Exception('Invalid input');
        }

    }

    public function setAge($age)
    {
        if (is_numeric($age) && $age > 0) {
            $this->age = $age;
        } else {
            throw new \Exception('Invalid input');
        }


    }

    public function setGender($gender)
    {
        if ($gender == 'Male' || $gender == "Female") {
            $this->gender = $gender;
        } else {
            echo "Invalid gender";
        }

    }

    public function __toString()
    {
        return $this->type . " " . $this->name . " " . $this->age . ' ' . $this->gender . PHP_EOL;
    }


    public function produceSound()
    {
        echo "Not implemented!".PHP_EOL;
    }

}