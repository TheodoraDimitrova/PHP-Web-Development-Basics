<?php
$string=trim(fgets(STDIN));
$strArr=str_split($string);
$result=[];

for($i=0; $i<count($strArr); $i++){

    if(!array_key_exists($strArr[$i],$result)){
    $result[$strArr[$i]]=1;
    }else{
        $result[$strArr[$i]]+=1;
    }



}
print_r($result);