<?php

use Cats\Cymric;
use Cats\Siamese;
use Cats\StreetExtraordinaire;


include 'StreetExtraordinaire.php';
include 'Cymric.php';
include 'Siamese.php';
$cats = [];
$infoCat = trim(fgets(STDIN));
while ($infoCat != "End") {
    $infoCat = explode(" ", $infoCat);
    $breed = $infoCat[0];
    $name = $infoCat[1];
    $age = $infoCat[2];

    if ($breed == "Siamese") {
        $cats[$name] = new  Siamese($name, $breed, $age);


    } elseif ($breed == "Cymric") {
        $cats[$name] = new Cymric($name, $breed, $age);

    } elseif ($breed == "StreetExtraordinaire") {
        $cats[$name] = new StreetExtraordinaire($name, $breed, $age);

    } else {
        echo "invalid breed";
    }


    $infoCat = trim(fgets(STDIN));


}

$search=trim(fgets(STDIN));
foreach ($cats as $cat=>$val){
    if( $cat == $search){
        echo $val;
    }

}
