<?php
//var_dump($_GET);

if (isset($_GET['calculate'])) {
    $operation = $_GET['operation'];
    $number_one = $_GET['number_one'];
    $number_two = $_GET['number_two'];

    if ($operation == 'sum') {
        echo '== ' . ($number_one + $number_two);
    } elseif ($operation == 'substract') {
        echo '== ' . ($number_one - $number_two);
    } else {
        echo 'Invalid operation supplied';
    }
}
