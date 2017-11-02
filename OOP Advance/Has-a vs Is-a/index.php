<?php
use relationships\Car;
use relationships\Maruti;
use relationships\Engine;
include "Car.php";
include 'Maruti.php';
include 'Engine.php';

$myMuruti= new Maruti("Red",240);
echo $myMuruti->getInfo();
echo $myMuruti->MarutiStartDemo();