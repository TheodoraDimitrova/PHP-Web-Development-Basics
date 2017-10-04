<?php
$poits=trim(fgets(STDIN));
$arrPoits=explode(", ",$poits);

$x1=$arrPoits[0];
$y1=$arrPoits[1];
$x2=$arrPoits[2];
$y2=$arrPoits[3];
distanceA($x1,$y1);//izchislqva raztoqnieto ot x1 i y1 do nachaloto na kordinatnata sistema
distanseB($x2,$y2);//izchislqva raztoqnieto ot x2 i y2 do nachaloto na kordinatnata sistema
distanseAB($x1,$y1,$x2,$y2);//raztoqnieto m/u dvete tochki A i B
function distanceA($x1,$y1,$beging1=0,$begining2=0){
    $distance=sqrt(pow($x1 - $beging1, 2) + pow($y1 - $begining2, 2));
    if(filter_var($distance, FILTER_VALIDATE_INT)|| $distance==0 ){//edin ot testovete v judge e 0 0 0 0 pri koeto dopulvam proverkata specialno
        echo "{" .$x1 .", ".$y1 ."}"." to "."{".$beging1.  ", "  .$begining2. "}". " is valid"  .PHP_EOL;//ako e cqlo chislo
    }else{
        echo "{" .$x1 .", ".$y1 ."}"." to "."{".$beging1.  ", "  .$begining2. "}". " is invalid".PHP_EOL;//ako e realno chislo
    }
}
function distanseB($x2,$y2,$beging1=0,$begining2=0){
    $distance=sqrt(pow($x2 - $beging1, 2) + pow($y2 - $begining2, 2));     //√ (x2-x1)2+(y2-y1)2
    if(  filter_var($distance, FILTER_VALIDATE_INT)|| $distance==0 ){
        echo "{" .$x2.", ".$y2 ."}"." to "."{".$beging1.  ", "  .$begining2. "}". " is valid"  .PHP_EOL;
    }else{
        echo "{" .$x2.", ".$y2 ."}"." to "."{".$beging1.  ", "  .$begining2. "}". " is invalid"  .PHP_EOL;
    }

}
function distanseAB($x1,$y1,$x2,$y2){
    $distance=sqrt(pow($x1 - $x2, 2) + pow($y1 - $y2, 2));
    if(  filter_var($distance, FILTER_VALIDATE_INT)|| $distance==0 ){
        echo "{" .$x1.", ".$y1 ."}"." to "."{".$x2. ", "  .$y2. "}". " is valid"  .PHP_EOL;
    }
    else{
        echo "{" .$x1 .", ".$y1 ."}"." to "."{".$x2.  ", "  .$y2. "}". " is invalid"  .PHP_EOL;

    }
}