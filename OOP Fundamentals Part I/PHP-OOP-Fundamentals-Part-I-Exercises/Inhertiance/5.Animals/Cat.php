<?php
namespace Animals;


class Cat extends Animal implements \iSound
{
    public function produceSound()
    {
        echo "MiauMiau".PHP_EOL;
    }

}