<?php

namespace Animals;


class Kitten extends Cat implements \iSound
{
    public function produceSound()
    {
        echo "Miau" . PHP_EOL;
    }

    public function setGender($gender)
    {
        if ($gender != "Female") {
            throw new \Exception("Invalid input!");
        }
        parent::setGender($gender);
    }
}