<?php //funkciite sa s referenciq

/*•	chop – divide the number by two
•	dice – square root of number
•	spice – add 1 to number
•	bake – multiply number by 3
•	fillet – subtract 20% from number
*/
$num=intval(trim(fgets(STDIN)));
$operations=trim(fgets(STDIN));
$options=explode(', ',$operations);
function chopp(&$num){
    $num=$num/2;
    echo $num . PHP_EOL;
}

function dice(&$num){
    $num=sqrt($num);
    echo $num . PHP_EOL;
}
function spice(&$num){
    $num=$num+1 ;
    echo $num . PHP_EOL;
}
function bake(&$num){
    $num=$num*3;
    echo  $num . PHP_EOL;
}
function fillet(&$num){
    $num=$num-($num*20/100);
    echo $num . PHP_EOL;
}
for($i=0;  $i < count($options); $i++){
    if ($options[$i]=="chop"){
        chopp($num);

    }elseif ($options[$i]=="dice"){
        dice($num);

    }elseif ($options[$i]=="spice"){
        spice($num);

    }elseif ($options[$i]=="bake"){
        bake($num);

    }elseif($options[$i]=="fillet"){
        fillet($num);
    }
}