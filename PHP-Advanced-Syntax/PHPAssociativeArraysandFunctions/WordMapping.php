<?php
$text=strtolower(trim(fgets(STDIN)));
$arrWords=str_word_count($text,1);
//0 - връща броя на намерените думи
//1 - връща масив, съдържащ всички думи намерени в string
//2 - връща асоциативен масив, в който ключовете са позицията на съответните думи в string , а стойностите - самите думи.
$arrCountValue=array_count_values($arrWords);
//print_r($arrCountValue);
foreach ($arrCountValue as $word=>$times){
    echo $word."->". $times.PHP_EOL;
}