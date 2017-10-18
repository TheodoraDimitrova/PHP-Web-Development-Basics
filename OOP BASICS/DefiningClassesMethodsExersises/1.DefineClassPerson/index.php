<?php
include 'Person.php';
//$person=new Person();
//$person1 = new Person('Gosho', 34);
//$person2 =new Person('Pesho',23);
//$person3=new Person("Atanas" ,36);
//echo(count(get_object_vars($person)));
$name=trim(fgets(STDIN));
$age=trim(fgets(STDIN));
$person=new Person($name,$age);