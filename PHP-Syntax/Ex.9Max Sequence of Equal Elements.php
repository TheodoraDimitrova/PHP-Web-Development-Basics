<?php
//the longest sequence of equal elements

$line = explode(' ', trim(fgets(STDIN)));
//print_r($line);
$start = 0;
$count = 0;
$max = 0;

for ($i = 0; $i < count($line) - 1; $i++) {
    if ($line[$i] == $line[$i + 1]) {
        $count++;
        if ($count > $max) {
            $start = $i - $count;
            $max = $count;
        }
    } else {
        $count = 0;
    }
}
for ($i = $start + 1; $i <= $start + $max + 1; $i++) {
    echo $line[$i] . " ";
}
echo PHP_EOL;



