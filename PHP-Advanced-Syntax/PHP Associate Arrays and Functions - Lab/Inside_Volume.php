<?php
$input = explode(", ", (trim(fgets(STDIN))));
print_r($input);

for ($i = 0; $i < count($input); $i += 3) {
    $x = $input[$i];
    $y = $input[$i + 1];
    $z = $input[$i + 2];

    if(isVolume($x,$y,$z)){
        echo "Inside".PHP_EOL;
    }else{
        echo "Outside".PHP_EOL;
    }
}
function isVolume($x, $y, $z)
{
    $x1 = 10;
    $x2 = 50;
    $y1 = 20;
    $y2 = 80;
    $z1 = 15;
    $z2 = 50;

    if ($x >= $x1 && $x <= $x2) {
        if ($y >= $y1 && $y <= $y2) {
            if ($z >= $z1 && $z <= $z2) {
                return true;
            }
        }
    }
    return false;
}

