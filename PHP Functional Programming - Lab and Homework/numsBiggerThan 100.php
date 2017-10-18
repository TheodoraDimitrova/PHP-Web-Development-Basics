<?php
$nums = array(12, 234, 56, 456, 78);


$result = array_filter($nums, function ($num) {
    if ($num > 100) {
        return true;

    }
    return false;
});
print_r($result);