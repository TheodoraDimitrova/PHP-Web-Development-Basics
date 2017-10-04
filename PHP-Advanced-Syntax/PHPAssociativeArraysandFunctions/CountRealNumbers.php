<?php
$nums=trim(fgets(STDIN));
$numsArr=explode(" ",$nums);
$result=[];
foreach ($numsArr as $k=>$v){
    if(!array_key_exists($v,$result)){
        $result[$v]=1;
    }else{
        $result[$v]+=1;
    }
}

foreach ($result as $k=>$v){
    if ($k>0){
        ksort($result);
    }else{
        arsort($result);
    }
}
foreach ($result as $k=>$v){
    echo $k." -> ".$v." times".PHP_EOL;
}


