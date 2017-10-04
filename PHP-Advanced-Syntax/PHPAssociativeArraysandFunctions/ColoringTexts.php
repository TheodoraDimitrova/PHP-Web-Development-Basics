<?php
$text=trim(fgets(STDIN));
$text=str_replace(" ","",$text);
$arrText=str_split($text);
//print_r($arrText);
$arrOdd=[];
$arrEven=[];
foreach ($arrText as $k=>$v){
    if((ord($v))%2==0){
       $arrEven[]=$v;
    }else{
        $arrOdd[]=$v;
    }

}
echo "Even: ";
foreach ($arrEven as $k=>$v){
    echo $v." ";
}
echo PHP_EOL;
echo "Odd: ";
foreach ($arrOdd as $k=>$v){
    echo $v." ";
}
