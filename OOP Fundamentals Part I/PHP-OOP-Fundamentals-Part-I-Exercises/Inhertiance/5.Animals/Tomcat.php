<?php

namespace Animals;


class Tomcat extends Cat implements \iSound
{
   public function produceSound()
   {
       echo "Give me one million b***h".PHP_EOL;
   }
    public function setGender($gender)
    {
        if($gender!="Male"){
            throw new \Exception("Invalid input!");
        }
        parent::setGender($gender);
    }

}