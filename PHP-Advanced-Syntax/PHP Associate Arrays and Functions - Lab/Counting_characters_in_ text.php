<?php
$str = strtolower(trim(fgets(STDIN)));
$arrStr = str_split(str_replace(" ", "", $str));
//str_split-> prevrushta string v masiv
//str_replace->zamestva intervalite s nishto
//print_r($arrStr);
$resultArr = [];
$count = 1;
for ($i = 0; $i < count($arrStr); $i++) {// obhojdame stringa
    $charTimes = substr_count($str, "$arrStr[$i]");
    $resultArr[$arrStr[$i]] = $charTimes;

}
echo '[';
foreach ($resultArr as $char=>$times){
   echo '"'.$char.'"' ." => ".'"'. $times.'",';
}
echo ']';