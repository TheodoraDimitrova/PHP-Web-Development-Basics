<?php

use Shopping\Person;
use Shopping\Product;
include 'Person.php';
include 'Product.php';

$peopleArr = [];
$productArr = [];

$linePersons = trim(fgets(STDIN));
$linePersons = array_filter(explode(";", $linePersons));
foreach ($linePersons as $product) {
    $info = explode('=', $product);
    $name = $info[0];
    $money = $info[1];
    $peopleArr[$name] = new Person($name, $money);

}
$lineProducts = trim(fgets(STDIN));
$lineProducts = array_filter(explode(";", $lineProducts));
foreach ($lineProducts as $product) {
    $info = explode('=', $product);
    $nameProduct = $info[0];
    $price = $info[1];
    $productArr[$nameProduct] = new Product($nameProduct, $price);

}


$line = trim(fgets(STDIN));
while ($line != 'END') {
    $lineArr = explode(' ', $line);
    $person = $lineArr[0];
    $item = $lineArr[1];

   if($peopleArr[$person]->getMoney() >= $productArr[$item]->getCost()){//proverqvame parite
       $peopleArr[$person]->fullBag($item);//pribavqme produkta v koshnicata
       $peopleArr[$person]->Bay($productArr[$item]->getCost());//izvajdame ot parite cenata na produkta
       //izpisvame koi kakvo e kupil
       echo "$person bought $item".PHP_EOL;
   }else{
       echo "$person  can't afford $item".PHP_EOL;

   }

    $line = trim(fgets(STDIN));
}

foreach ($peopleArr as $person){
    if(empty($person->getBagOfProducts())){
        echo $person->getName()."- Nothing bought".PHP_EOL;
    }else{
        echo $person->getName()." ";
        echo $pro=implode (", ",$person->getBagOfProducts()).PHP_EOL;
    }
}