<?php
use Factory\FoodFactory;
use Factory\MoodFactory;
include 'FoodFactory.php';
include 'MoodFactory.php';
$line=explode(",",strtolower(trim(fgets(STDIN))));
$poits=0;
foreach ($line as $key=>$food){

     $food=new FoodFactory($food);
    $poits= $food::getPints();

}


echo $poits.PHP_EOL;
$mood=new MoodFactory($poits);
echo $mood->getMood();