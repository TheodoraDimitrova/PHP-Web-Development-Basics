<?php
use Person\Person;
use Person\Child;
include 'Person.php';
include 'Child.php';

try{
    $person = new Person("Katya", 27);
    $child = new Child("Maya", 10);
    print_r($person);
    print_r($child);
}catch (Exception $e){
    echo 'Caught exception: ', $e->getMessage(), "\n";
}