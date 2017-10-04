<?php //poluchava mi se bezkraen cikul


$num1 = fgets(STDIN);
$num2 = fgets(STDIN);
if ($num1 < $num2) {
    echo "purvoto uslovia";
    for ($i = $num1; $i <= $num2; )
    {
        echo $i . PHP_EOL;
        $i++;
    }
} else {
    echo "elsa";
    for ($i = $num2; $i <= $num1; ) {
        echo $i . PHP_EOL;
        $i++;
    }


}
