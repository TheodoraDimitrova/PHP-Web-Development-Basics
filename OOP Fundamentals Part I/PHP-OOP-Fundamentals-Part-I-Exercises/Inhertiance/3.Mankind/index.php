<?php
use Mankind\Human;
use Mankind\Worker;
use Mankind\Student;
include 'Human.php';
include 'Worker.php';
include 'Student.php';
try{
    $infoStudent=trim(fgets(STDIN));
    $studentArr=explode(" ",$infoStudent);
    $firstNameSt=$studentArr[0];
    $lastNameSt=$studentArr[1];
    $facultyNum=$studentArr[2];
    $student=new Student($firstNameSt,$lastNameSt,$facultyNum);
    echo $student.PHP_EOL;
    $infoWorker=trim(fgets(STDIN));
    $workerArr=explode(" ",$infoWorker);
    $fistNameWr=$workerArr[0];
    $lastNameWr=$workerArr[1];
    $salary=$workerArr[2];
    $hoursPerDay=$workerArr[3];
    $worker=new Worker($fistNameWr,$lastNameWr,$salary,$hoursPerDay);
    echo $worker;


}catch (Exception $e){
    echo 'Caught exception: ', $e->getMessage(), "\n";
}
