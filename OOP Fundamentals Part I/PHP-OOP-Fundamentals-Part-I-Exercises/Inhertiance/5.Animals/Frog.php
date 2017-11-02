<?php

namespace Animals;


class Frog extends Animal implements \iSound
{

    public function produceSound()
    {
       echo "Frogggg".PHP_EOL;
    }
}