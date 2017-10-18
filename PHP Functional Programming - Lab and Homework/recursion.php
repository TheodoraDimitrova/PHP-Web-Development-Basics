<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 10.10.2017 г.
 * Time: 16:42 ч.
 */
function recursion($a)
{
    if ($a < 20) {
        echo "$a\n";
        recursion($a + 1);
    }
}
echo recursion(20);