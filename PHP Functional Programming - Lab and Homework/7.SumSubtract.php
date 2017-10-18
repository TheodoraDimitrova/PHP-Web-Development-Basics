<?php
$input = array
(
    array("sum", 12, 156),
    array("subtract", 5, 6),
    array("subtract", 1, 2),
);
$opSum = function ($a, $b) {
    if (($a + $b) < 100) {
        return $a + $b;
    }
    return 'error';
};
$opSub = function ($a, $b) {
    return $a - $b;
};
$result = [];
foreach ($input as $item) {
    $option = $item[0];
    $a = $item[1];
    $b = $item[2];
    if ($option == 'sum') {
        $result[] = $opSum($a, $b);
    } else {
        $result[] = $opSub($a, $b);
    }
}
print_r($result);