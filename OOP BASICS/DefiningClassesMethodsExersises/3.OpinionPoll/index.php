<?php
use OpinionPoll\Person;
include "Person.php";
$persons=[];
$n = trim(fgets(STDIN));
for ($i = 1; $i <= $n; $i++) {
    $line = explode(" ", trim(fgets(STDIN)));
    //print_r($line);
    $persons[] = new Person($line[0], $line[1]);
}
//print_r($persons);
function cmp(Person $a,Person $b)
{

    return strcasecmp($a->name ,$b->name);


}//sortirvame po ime

$filteredPersons = array_filter($persons, function (Person $person) { //populva v nov masiv horata koito sa nad 30 godini
    return $person->getAge() > 30;
});
usort($filteredPersons,"cmp");
foreach ($filteredPersons as $obj){
    echo $obj->name." - ".$obj->age.PHP_EOL;
}