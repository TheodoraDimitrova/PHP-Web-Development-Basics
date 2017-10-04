<?php
$text = trim(fgets(STDIN));
$arrText = explode(", ", $text);
//print_r($arrText);
$town = "";
$resultArr = [];
for ($i = 0; $i < count($arrText); $i += 2) {
    $town = $arrText[$i];
    $sumTown = $arrText[$i + 1];
    if (!array_key_exists($town, $resultArr)) {
        $resultArr[$town] = $sumTown;
    } else {
        $resultArr[$town] += $sumTown;
    }
}
echo "[";
foreach ($resultArr as $town=>$sum){
echo '"'.$town.'"'." => ".'"'.$sum.'",';
}
echo "]";
