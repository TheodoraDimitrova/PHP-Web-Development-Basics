<?php


use Animals\Cat;
use Animals\Dog;
use Animals\Frog;
use Animals\Kitten;
use Animals\Tomcat;
include 'iSound.php';
include "Animal.php";
include 'Cat.php';
include 'Dog.php';
include 'Frog.php';
include 'Kitten.php';
include 'Tomcat.php';
try{
    $type=trim(fgets(STDIN));
    $infoAnimal=trim(fgets(STDIN));
    while ($type!="Beast"){
        $infoAnimal=explode(" ",$infoAnimal);
        $name=$infoAnimal[0];
        $age=$infoAnimal[1];
        $gender=$infoAnimal[2];
        if($type=='Cat'){
            $animal= new Cat($type,$name,$age,$gender);
            echo $animal;
            echo $animal->produceSound();
        }elseif ($type=='Dog'){
            $animal= new Dog($type,$name,$age,$gender);
            echo $animal;
            echo $animal->produceSound();
        }elseif ($type=='Frog'){
            $animal= new Frog($type,$name,$age,$gender);
            echo $animal;
            echo $animal->produceSound();
        }elseif ($type=='Kitten'){
            $animal= new Kitten($type,$name,$age,$gender);
            echo $animal;
            echo $animal->produceSound();
        }elseif ($type=='Tomcat'){
            $animal= new Tomcat($type,$name,$age,$gender);
            echo $animal;
            echo $animal->produceSound();

        }
        $type=trim(fgets(STDIN));
        $infoAnimal=trim(fgets(STDIN));
    }
}catch (Exception $e){
    echo "Greshka ->>"." ".$e->getMessage();
}
