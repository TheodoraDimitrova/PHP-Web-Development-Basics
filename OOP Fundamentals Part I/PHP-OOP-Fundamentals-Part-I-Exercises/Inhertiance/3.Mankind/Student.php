<?php
namespace Mankind;


class Student extends Human
{
    private $facultyNumber;


    public function __construct($firstName,$secondName,$facultyNumber)
    {
        parent::__construct($firstName,$secondName);
        $this->setFacultyNumber($facultyNumber);
    }

    public function setFacultyNumber($facultyNumber)
    {
        if(strlen($facultyNumber)>5 && strlen($facultyNumber)<10){
            $this->facultyNumber = $facultyNumber;

        }else{
            throw new \Exception('Invalid faculty number!');
        }
    }


    public function getFacultyNumber()
    {
        return $this->facultyNumber;
    }


    public function __toString()
    {

       return parent::__toString().PHP_EOL. "Faculty number: {$this->getFacultyNumber()}".PHP_EOL;
    }


}