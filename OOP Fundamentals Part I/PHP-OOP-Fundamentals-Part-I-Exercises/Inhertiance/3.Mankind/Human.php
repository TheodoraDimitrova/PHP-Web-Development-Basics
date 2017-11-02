<?php
namespace Mankind;


class Human
{
    protected $firstName;
    protected $lastName;
    public function __construct($firstName, $lastName)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
    }


    public function setFirstName($firstName)
    {
        if(!ctype_upper($firstName[0])){
            throw new \Exception('Expected upper case letter!Argument: firstName');

        }elseif (strlen($firstName)<4){
            throw new \Exception('Expected length at least 4 symbols!Argument: firstName');

        }else{
            $this->firstName = $firstName;
        }

    }
    public function setLastName($lastName)
    {
        if(!ctype_upper($lastName[0])){
            throw new \Exception('Expected upper case letter!Argument: firstName');

        }elseif (strlen($lastName)<3){
            throw new \Exception('Expected length at least 3 symbols!Argument: firstName');

        }else{
            $this->lastName = $lastName;
        }
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function __toString()
    {
       return "First Name: {$this->getFirstName()}  
Last Name: {$this->getLastName()}";

    }


}