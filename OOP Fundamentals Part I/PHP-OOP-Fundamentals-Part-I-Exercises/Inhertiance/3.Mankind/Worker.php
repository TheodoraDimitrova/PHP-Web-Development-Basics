<?php

namespace Mankind;


class Worker extends Human
{
    private $salary;
    private $hoursPerDay;


    public function __construct($firstName, $secondName, $salary, $hoursPerDay)
    {
        parent::__construct($firstName, $secondName);
        $this->salary = $salary;
        $this->hoursPerDay = $hoursPerDay;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function getHoursPerDay()
    {
        return $this->hoursPerDay;
    }

    public function setLastName($lastName)
    {
        if (strlen($lastName) >= 4) {
            $this->lastName = $lastName;
        } else {
            throw new \Exception('Expected length more than 3 symbols!Argument: lastName');
        }

    }

    public function setSalary($salary)
    {
        if (strlen($salary) < 10) {
            throw new \Exception('Expected value mismatch!Argument: weekSalary');
        }
        $this->salary = $salary;
    }

    public function setHoursPerDay($hoursPerDay)
    {
        if ($hoursPerDay < 1 || $hoursPerDay > 12) {
            throw new \Exception('Expected value mismatch!Argument: workHoursPerDay');
        }
        $this->hoursPerDay = $hoursPerDay;
    }

    public function salaryPerHour()
    {
        return number_format(($this->getSalary() / 7) / $this->getHoursPerDay(),2);
    }

    public function __toString()
    {

        return parent::__toString().PHP_EOL.
            "Week Salary: {$this->getSalary()}".PHP_EOL.
            "Hours per day: {$this->getHoursPerDay()}".PHP_EOL.
            "Salary per hour: {$this->salaryPerHour()}";

    }


}