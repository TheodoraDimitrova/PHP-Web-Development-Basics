<?php
$input=trim(fgets(STDIN));
$arrCordinats=explode(", ",$input);
function getLocation($x,$y){
    //tuvalo
    $tuvalox1=1;
    $tuvalox2=3;

    $tuvaloy1=1;
    $tuvaloy2=3;

    //Tonga
    $tongax1=0;
    $tongax2=2;

    $tongay1=6;
    $tongay2=8;

    //samoa
    $samoax1=5;
    $samoax2=7;
    $samoay1=3;
    $samoay2=6;

    //kuk
    $kukx1=4;
    $kukx2=9;

    $kuky1=7;
    $kuky2=8;
    //Tokelau
    $tokelaux1=8;
    $tokelaux2=9;

    $tokelauy1=0;
    $tokelauy2=1;


    if($x >= $tuvalox1 && $x <= $tuvalox2 &&  $y >= $tuvaloy1 && $y <=$tuvaloy2){
        return "Tuvalu";
    } elseif ($x >= $tongax1 && $x <= $tongax2 &&  $y >= $tongay1 && $y <= $tongay2){
        return "Tonga";
    }elseif ($x >= $samoax1 && $x <= $samoax2 &&  $y >= $samoay1 && $y <= $samoay2) {
        return "Samoa";
    }elseif ($x >= $kukx1 && $x <= $kukx2 &&  $y >= $kuky1 && $y <= $kuky2) {
        return "Cook";
    }elseif ($x >= $tokelaux1 && $x <= $tokelaux2 &&  $y >= $tokelauy1 && $y <= $tokelauy2) {
        return "Tokelau";
    }else{
        return "On the bottom of the ocean";

    }
}
for ($i=0; $i<count($arrCordinats); $i+=2){
    $x=$arrCordinats[$i];
    $y=$arrCordinats[$i+1];

    $locaion=getLocation($x,$y);
    echo $locaion."\r\n";
}