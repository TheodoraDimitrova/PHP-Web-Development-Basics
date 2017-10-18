<?php

$list = array(
array("animal" => 0, "color" => 0, "coins" => 10),
array("animal" => 0, "color" => 1, "coins" => 20),
array("animal" => 0, "color" => 2, "coins" => 10),
array("animal" => 1, "color" => 0, "coins" => 55),
array("animal" => 1, "color" => 1, "coins" => 25),
array("animal" => 1, "color" => 2, "coins" => 10)
);

function less_than_30($arr) {
    return ($arr['coins'] < 30);
}

$result = array_filter($list, "less_than_30");
print_r($result);