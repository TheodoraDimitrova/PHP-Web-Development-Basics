<?php

use OldestFamilyMember\Person;
use OldestFamilyMember\Family;

include 'Person.php';
include 'Family.php';


$n = trim(fgets(STDIN));
$family = new Family();
for ($i = 1; $i <= $n; $i++) {
    $line = explode(" ", trim(fgets(STDIN)));
    $name = $line[0];
    $age = $line[1];
    $eachPerObj = new Person($name, $age);
    //print_r($eachPerObj);

    $family->AddMembers($eachPerObj);


}

echo $family->getOldestMember();