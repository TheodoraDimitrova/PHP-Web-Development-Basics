<?php
$text = trim(fgets(STDIN));

$stock = [];


while ($text != "shopping time") {
    $arrText = explode(" ", $text);
    $command = $arrText[0];
    $product = $arrText[1];
    $quantity = $arrText[2];
    if ($command == "stock") {
        if (!array_key_exists($product, $stock)) {
            $stock[$product] = $quantity;
        } else {
            $stock[$product] += $quantity;
        }


    }
    $text = trim(fgets(STDIN));
}
$text = trim(fgets(STDIN));
while ($text != "exam time") {
    $arrText = explode(" ", $text);
    $command = $arrText[0];
    $product = $arrText[1];
    $quantity = $arrText[2];
    if ($command == "buy") {
        if (!array_key_exists($product, $stock)) {
            echo $product . "doesn't exist".PHP_EOL;
        } else {
            $stock[$product] -= $quantity;
        }
    }
    $text = trim(fgets(STDIN));
}

foreach ($stock as $k => $v) {
    if ($v > 0) {
        echo $k . " -> " . $v . PHP_EOL;
    }


}
