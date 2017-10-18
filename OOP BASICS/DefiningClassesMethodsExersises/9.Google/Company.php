<?php

class Company
{
    private $companyName;
    private $department;
    private $salary;

    public function __construct(string $companyName, string $department, float $salary)
    {
        $this->companyName = $companyName;
        $this->department = $department;
        $this->salary = $salary;
    }

    function __toString()
    {
        return "{$this->companyName} {$this->department} {$this->salary}";
    }


}