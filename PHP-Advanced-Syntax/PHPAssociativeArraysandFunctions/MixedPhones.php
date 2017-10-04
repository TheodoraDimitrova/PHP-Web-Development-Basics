<?php
$line=trim(fgets(STDIN));
$phone=0;
$person="";
$result=[];
while ($line!="Over"){

    $arrText=explode(" : ",$line);

    if(is_numeric($arrText[0])){
        $phone=$arrText[0];
        $person=$arrText[1];

    }else{
        $phone=$arrText[1];
        $person=$arrText[0];

    }
    $result[$person]=$phone;
    $line=trim(fgets(STDIN));
}
ksort($result);
foreach ($result as $k=>$v){
    echo $k." -> ".$v.PHP_EOL;
}


