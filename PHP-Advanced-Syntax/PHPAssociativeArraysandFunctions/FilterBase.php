<?php
$input = trim(fgets(STDIN));
$arrAge = [];
$arrSalary = [];
$arrPosition = [];
while ($input != "filter base") {
    $input = explode("->", $input);
    $key = trim($input[0]);
    $value = trim($input[1]);
    if (is_numeric($value)) {
        $value = $value + 0;
        if(is_float($value)){

            $arrSalary[$key]=$value;
        }else{
            $arrAge[$key]=$value;
        }
    } else {
        $arrPosition[$key] = $value;
    }
    $input = trim(fgets(STDIN));
}
$input = trim(fgets(STDIN));
if($input=='Salary'){
    foreach ($arrSalary as $k=>$v){
      echo "Name: ".$k.PHP_EOL;
      echo 'Salary: '.$v.PHP_EOL;
      echo "===================".PHP_EOL;
    }

}elseif ($input=='Age'){
    foreach ($arrAge as $k=>$v){
        echo "Name: ".$k.PHP_EOL;
        echo 'Age: '.$v.PHP_EOL;
        echo "===================".PHP_EOL;
    }

}else{
    foreach ($arrPosition as $k=>$v){
        echo "Name: ".$k.PHP_EOL;
        echo 'Position: '.$v.PHP_EOL;
        echo "===================".PHP_EOL;
    }
}