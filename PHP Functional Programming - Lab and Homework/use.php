<?php
$message = 'hello';
$example = function () use ($message) {
    var_dump($message);
};
$example();