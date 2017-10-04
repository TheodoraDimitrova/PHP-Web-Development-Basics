<?php
$line=trim(fgets(STDIN));
$array=explode(", ",$line);

$elemets_Times=(array_count_values($array));
/*  [Ce] => 2
    [O] => 2
    [Mo] => 2
    [Ee] => 1
*/
foreach ($elemets_Times as $elment => $times){
    if($times==1){
        echo $elment." ";
    }
}