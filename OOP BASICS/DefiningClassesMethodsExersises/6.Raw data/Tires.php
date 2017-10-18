<?php

class Tires extends CarCargo
{
    public $tire_1Press;
    public $tire_2Press;
    public $tire_3Press;
    public $tire_4Press;


    public function setEachTire($tiresCollection)
    {
        for ($i = 0; $i < count($tiresCollection); $i += 2) {

            $this->tire_1Press = $tiresCollection[0];
            $this->tire_2Press = $tiresCollection[2];
            $this->tire_3Press = $tiresCollection[4];
            $this->tire_4Press = $tiresCollection[6];

        }
    }

    public function checkPressure()
    {
        if ($this->tire_1Press < 1 || $this->tire_2Press < 1 || $this->tire_3Press < 1 || $this->tire_4Press < 1) {
            return true;
        }
        return false;
    }


}