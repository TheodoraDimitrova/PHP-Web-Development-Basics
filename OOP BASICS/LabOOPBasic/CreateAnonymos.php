<?php
$obj[] = new stdClass;
$obj[] = $obj->aProperty = 'value0';
$arr[] = $obj->bProperty = 'value1';
$arr[] = $obj->cProperty = 'value2';
$arr[] = $obj->dProperty = 'value3';
$arr[] = $obj->eProperty = 'value4';
$arr[] = $obj->fProperty = 'value5';
$arr[] = $obj->gProperty = 'value6';

foreach ($arr as $k => $v) {
    echo $k . "=>" . $v . PHP_EOL;
}