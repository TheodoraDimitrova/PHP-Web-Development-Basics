<?php

//The input is hard coded as an array of objects.
use FamilyTree\Person;
use FamilyTree\Father;
use FamilyTree\Sons;
use FamilyTree\GrandSons;

require 'Person.php';
require 'Father.php';
require 'Sons.php';
require 'GrandSons.php';
$familyTree = [];

$father = new Father("James Strong ", 1873, 1923);//50
$familyTree[$father->getName()] = [];


$son_1 = new Sons("Peter Strong ", 1894, 1928);
$familyTree[$father->getName()][$son_1->getName()] = $son_1;
$son_2 = new Sons("Andrew Strong ", 1899, 1970);
$familyTree[$father->getName()][] = $son_2;

$grandSon_1 =new GrandSons("Jackson Strong ",1927,1992);//65
$familyTree[$father->getName()][$son_2->getName()][$grandSon_1->getName()] = $grandSon_1;
$grandSon_2 =new GrandSons("Martin Strong ",1927,1967);//40
$familyTree[$father->getName()][$son_2->getName()][$grandSon_2->getName()] = $grandSon_2;
$grandSon_3 =new GrandSons("Gregory Strong ",1931,2000);//69
$familyTree[$father->getName()][$son_2->getName()][$grandSon_3->getName()] = $grandSon_3;
//print_r($familyTree);

function test_print($item)
{
    //echo "$key holds $item\n";
   echo $item->getGenerationNum() .PHP_EOL;



}

array_walk_recursive($familyTree, 'test_print');