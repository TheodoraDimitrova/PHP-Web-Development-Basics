<?php
include 'Employee.php';
$n = trim(fgets(STDIN));
$employeesArr=[];
for ($i = 1; $i <= $n; $i++) {
    $companyEpl = explode(" ", trim(fgets(STDIN)));
    $name = $companyEpl[0];
    $salary = $companyEpl[1];
    $position = $companyEpl[2];
    $department = $companyEpl[3];
    $email="";
    $age=0;
    if (count($companyEpl) == 5) {
        if (!is_numeric($companyEpl[4])) {
            $email = $companyEpl[4];
        } else {
            $age = $companyEpl[4];
        }
    } elseif(count($companyEpl)==4) {
        $age=0;
        $email="";
    }else{

        $email = $companyEpl[4];
        $age = $companyEpl[5];
    }

    $employeesArr[]=new Employee($name, $salary, $position, $department, $email, $age);
}
//print_r($employeesArr);
$sumSalaries=[];
foreach ($employeesArr as $employee){

    if(!key_exists($employee->department,$sumSalaries)){
        $sumSalaries[$employee->department]=$employee->salary;
    }else{
        $sumSalaries[$employee->department]+=$employee->salary;
    }

}
//print_r($bestSalary);
$bigSalary=array_search(max($sumSalaries), $sumSalaries);//Sales or Development
echo "Highest Average Salary: ".$bigSalary.PHP_EOL;

foreach ($employeesArr as $employee){//employee e obekt
    if($bigSalary==$employee->department){
        echo $employee->name." ".$employee->salary." ".$employee->email." ".$employee->age.PHP_EOL;
    }

}