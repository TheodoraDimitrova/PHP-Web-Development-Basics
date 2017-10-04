<?php
$number=trim(fgets(STDIN));
$arrDigits= str_split($number);//slagame chisloto v masiv
$average_of_number = array_sum($arrDigits) / count($arrDigits);//srednata stoinost na purvonachalnoto chislo
if ($average_of_number<5) {
    while ($average_of_number < 5) {
        $number .= 9;
        $arrDigits = str_split($number);//slagame chisloto v masiv
        $average_of_number = array_sum($arrDigits) / count($arrDigits);////srednata stoinost na purvonachalnoto chislo
        if ($average_of_number > 5) {
            echo $number;
        }

    }
}else{
    echo $number;
}