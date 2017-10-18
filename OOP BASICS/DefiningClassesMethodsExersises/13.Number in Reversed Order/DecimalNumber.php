<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 18.10.2017 г.
 * Time: 11:52 ч.
 */

namespace DecimalNumber;


class DecimalNumber
{
    public function reversedOrder( string $num)
    {
        $numArr=str_split($num);

        return implode('',array_reverse($numArr));

    }

}