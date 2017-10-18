<?php
declare(strict_types = 1);
$arr = array('Teddddy', 'Lazer', 'Teodora', 'Nikai', 'Alexdar');



$result = array_filter($arr, function (string $name): bool
{
    if (strlen($name) > 5) {
        return true;
    }
    return false;
});
print_r($result);