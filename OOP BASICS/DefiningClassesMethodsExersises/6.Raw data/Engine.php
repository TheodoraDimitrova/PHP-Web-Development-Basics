<?php

class Engine extends CarCargo
{

    public function checkEnginePower()
    {
        if ($this->EnginePower > 250) {
            return true;
        }
        return false;
    }

}