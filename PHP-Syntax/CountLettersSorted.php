<?php
$word = trim(fgets(STDIN));
$lettersArr = str_split($word);
$resultArr = [];
foreach ($lettersArr as $key => $letter) {
    if (!array_key_exists($letter, $resultArr)) {
        $resultArr[$letter] = 0;//zashto tuk e 0 ??????

    }
    $resultArr[$letter]++;
}
arsort($resultArr);//arsort() – сортира асоциативен масив във низходящ ред спрямо стойностите

foreach ($resultArr as $k => $v) {
    echo $k . ' -> ' . $v . PHP_EOL;
}
/*sort() – сортира масив във възходящ ред
rsort() – сортира масив във низходящ ред
asort() – сортира асоциативен масив във възходящ ред спрямо стойностите
ksort() – сортира асоциативен масив във възходящ ред спрямо ключовете
arsort() – сортира асоциативен масив във низходящ ред спрямо стойностите
krsort() – сортира асоциативен масив във възходящ ред спрямо ключовете
*/