<?php
//You will receive a single line from the standard input containing a word (or at least a set or characters).
// You need to print on the standard input how many times each letter is
// found in order of the letter appearance, in format {letter} -> {times}

$word = trim(fgets(STDIN));
$lettersArr = str_split($word);
$resultArr = [];
foreach ($lettersArr as $key => $letter) {
    if (!array_key_exists($letter, $resultArr)) {
        $resultArr[$letter] = 0;//zashto tuk e 0 ??????

    }
    $resultArr[$letter]++;
}

foreach ($resultArr as $k => $v) {
    echo $k . ' -> ' . $v . PHP_EOL;
}





