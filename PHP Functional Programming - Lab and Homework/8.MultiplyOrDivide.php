<?php
$input = array
(
    array("sum", 12, 133),
    array("subtract", 3, 3),
    array("sum", 1, 2),
    array("divide", 100, 0),
    array("divide", 100, "PP"),
    array("sum", "P123", 123)
);
$opSum = function ($a, $b) {
    return $a + $b;
};
$opSub = function ($a, $b) {
    return $a - $b;
};
$opMultiply = function ($a, $b) {
    return $a * $b;
};
$opDivide = function ($a, $b) {//•	If operation is division and second number is 0 then the error Is division_by_zero
    if ($b != 0) {
        return $a * $b;
    }
    return 'division_by_zero';
};

$result = [];
foreach ($input as $item) {
    $option = $item[0];

    $a = $item[1];
    if(is_string($a)){

    }


    $b = $item[2];
    if ($option == 'sum') {
        $result[] = $opSum($a, $b);
    } elseif ($option == 'subtract') {
        $result[] = $opSub($a, $b);
    } elseif ($option == 'divide') {
        $result[] = $opDivide($a, $b);
    } else {
        $result[] = $opMultiply($a, $b);
    }

}
print_r($result);