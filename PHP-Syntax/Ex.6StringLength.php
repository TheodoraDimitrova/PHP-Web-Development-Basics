<?php
$str = trim(fgets(STDIN));
$strLen = strlen($str);

if ($strLen < 20) {
    $diff = 20 - $strLen;
    for ($i = 0; $i < $diff; $i++) {
        $str .= '*';
    }
    echo $str;

} elseif ($strLen > 20) {
    echo substr("$str", 0, 20);
} else {
    echo $str;
}
