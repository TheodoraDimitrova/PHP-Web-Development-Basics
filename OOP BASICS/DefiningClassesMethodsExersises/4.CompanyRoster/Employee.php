<?php

class Employee
{

    public $name;
    public $salary;
    public $position;
    public $department;
    public $email;
    public $age;

    public function __construct($name, $salary, $position, $department, $email="", $age=0)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->position = $position;
        $this->department = $department;
        $this->setEmail($email);
        $this->setAge($age);
    }



    public function setEmail(string $email)
    {
       if($email==""){

          $this->email='n/a';

       }else{

            $this->email=$email;
       }
    }

    public function setAge(int $age)
    {
        if($age==0){
            $this->age=-1;

        }else{
            $this->age=$age;
        }
    }




}