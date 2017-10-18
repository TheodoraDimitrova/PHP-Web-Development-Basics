<?php
$animals = [
    [ 'name' => 'Waffles', 'type' => 'dog', 'age'  => 12],
    [ 'name' => 'Fluffy', 'type' => 'cat', 'age'  => 14],
    [ 'name' => 'Spelunky', 'type' => 'dog', 'age'  => 4],
    [ 'name' => 'Hank', 'type' => 'dog', 'age'  => 11],
];

//print_r($input);
//array_filter() to filter all dogs which are at age larger than 10 years.

$output = array_filter($animals, function($item) {
    return ($item['age'] > 10 && $item['type']=='dog');
});
print_r($output);