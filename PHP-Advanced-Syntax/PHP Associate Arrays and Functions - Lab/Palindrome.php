<?php
$a = trim(fgets(STDIN));
echo isPalindrome($a);



function isPalindrome($a)
{
    $b = strrev($a);
    $result = "";
    if ($a == $b) {
        $result = "Palendrome";
    } else {
        $result = "Not Palindrome";
    }
    return $result;
}
