<?php
$haystack =trim(fgets(STDIN));
$nedTimes=explode(" ",trim(fgets(STDIN)));

$needle = $nedTimes[0];
$times = $nedTimes[1];
function strallpos($haystack, $needle, $offset = 0)
{
    $result = array();
    for ($i = $offset; $i < strlen($haystack); $i++) {
        $pos = strpos($haystack, $needle, $i);
        if ($pos !== FALSE) {
            $offset = $pos;
            if ($offset >= $i) {
                $i = $offset;
                $result[] = $offset;
            }
        }
    }
    return $result;
}

$result = strallpos($haystack, $needle);

if (count($result) == $times) {

    for ($i = 0; $i < count($result); $i++) {
        if ($i == $times - 1) {
            echo $result[$i];
        }
    }
}else{
    echo  'Find the letter yourself!';

}