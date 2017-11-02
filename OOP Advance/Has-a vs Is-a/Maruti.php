<?php

namespace relationships;


class Maruti extends Car
{//Maruti extends Car and thus inherits all methods from Car (except final and static)
    //Maruti can also define all its specific functionality


    private $MarutiEngine;

    public function MarutiStartDemo()
    {
        $this->MarutiEngine = new Engine();
        $this->MarutiEngine->startEngine();
    }


}