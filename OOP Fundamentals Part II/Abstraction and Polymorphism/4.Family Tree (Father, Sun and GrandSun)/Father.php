<?php

namespace FamilyTree;


class Father

{
    protected $name;
    protected $yearBirth;
    protected $yearDead;

    public function __construct($name, $yearBirth, $yearDead)
    {
        $this->setName($name);
        $this->setYearBirth($yearBirth);
        $this->setYearDead($yearDead);
    }

    protected function setName($name)
    {
        if(strlen($name)<3){
            throw new \Exception("Name’s length should not be less than 3 symbols!");
        }
        $this->name = $name;
    }
    protected function setYearBirth($yearBirth)
    {
        $this->yearBirth = $yearBirth;
    }
    protected function setYearDead($yearDead)
    {
        $this->yearDead = $yearDead;
    }


    public function getName()
    {
        return $this->name;
    }


    public function getTimeLived()
    {
        return $this->yearDead-$this->yearBirth;
    }

}