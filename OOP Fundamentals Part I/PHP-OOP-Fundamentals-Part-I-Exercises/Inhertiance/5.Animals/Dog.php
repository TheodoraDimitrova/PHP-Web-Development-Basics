<?php


namespace Animals;


class Dog extends Animal implements \iSound
{

    public function produceSound()
    {
       echo "BauBau".PHP_EOL;
    }

}