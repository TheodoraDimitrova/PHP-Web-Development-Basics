<?php
namespace Iperson;


class Citizen implements iPerson,iDentifiable,iBirthable
{
    private $name;
    private $age;
    private $id;
    private $b_day;


    public function __construct(string $name, int $age,int $id,string $b_day)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setId($id);
        $this->setBirthdate($b_day);
    }


    public function setName(string $name)
    {
        $this->name=$name;
    }
    public function setAge(int $age)
    {
        $this->age=$age;
    }
    public function setId(int $id)
    {
        $this->id=$id;
    }
    public function setBirthdate(string $b_day)
    {
        $this->b_day=$b_day;
    }

    public function setIdBirtdate(int $Id, string $birthDate)
    {
      echo "setIdBirtdate";
    }


    public function __toString()
    {
        return $this->name."-->>".$this->age."   Id-> ".$this->id."   B_day:".$this->b_day;
    }




}