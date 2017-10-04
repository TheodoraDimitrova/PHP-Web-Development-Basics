<?php
$countPers = trim(fgets(STDIN));
$package =trim( fgets(STDIN));

$priceHall = 0;
$hallname = "";


if ($countPers <= 50) {
    $priceHall = 2500;
    $hallname = "Small Hall";


} elseif ($countPers <= 100) {
    $priceHall = 5000;
    $hallname = "Terrace";

} elseif ($countPers <= 120) {
    $priceHall = 7500;
    $hallname = "Greate Hall";
}


$pricePack = 0;
$discount = 0.0;

if ($package == "Normal") {
    $pricePack = 500;

    $discount = 0.5;


} elseif ($package == 'Gold') {
    $pricePack = 750;

    $discount = 0.10;

} elseif ($package == "Platinum") {
    $pricePack = 1000;
    $discount = 0.15;

}
$totalPrice = $priceHall + $pricePack;

$discount =$totalPrice *$discount;
$totalPrice=$totalPrice-$discount;

$pricePerPerson = $totalPrice / $countPers;

if ($countPers < 121) {
    echo "We can offer you the $hallname" . PHP_EOL;
    echo "The price per person is " . number_format($pricePerPerson, 2, '.', ',') . "$";
} else {
    echo "We do not have an appropriate hall.";
}
