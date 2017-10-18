<?php

function sum(int $num1, int $num2): int
{
    $sum = $num1 + $num2;
    return $sum;
}

if (isset($_GET['sum'])) {
    //vsichko koeto idva ot formulqrite idva tato string
    // $a = intval($_GET['num1']);
    $a = filter_var($_GET['num1'], FILTER_VALIDATE_INT);//filtur za int
    // $b = intval($_GET['num2']);
    $b = filter_var($_GET['num2'], FILTER_VALIDATE_INT);
   if($a!=false and $b!=false){
       echo sum($a,$b);
   }else{
     echo   "Invalid tipe of input!";
   }

}


?>
<form method="get">
    Number one: <input type="text" name="num1" title="num1"/><br/>
    Number two: <input type="text" name="num2" title="num1"/><br/>
    <input type="submit" name="sum">
</form>
