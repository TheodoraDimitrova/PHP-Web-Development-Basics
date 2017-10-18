<?php
$input = ['Hello ', 'there.', 'This is just another long string', 'that would pass the check.',
    ' but',' this', ' will',' not', 'pass it.'];
$len=20;
//print_r($input);
//[0] => Hello
//[1] => there.
//[2] => This is just another long string
//[3] => that would pass the check.
//[4] =>  but
//[5] =>  this
//[6] =>  will
//[7] =>  not
//[8] => pass it.
function concatLongStrings($input,$len){
    $result ="";
    foreach ($input as $key=>$value){
        if(strlen($value)>$len){
            $result.=$value.", ";
        }
    }
return $result;
};
$result=concatLongStrings($input,$len);
echo  $result;