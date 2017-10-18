<?php
declare(strict_types = 1);
function checkIsEvenOdd(int $num): string
{
    if ($num % 2 == 0) {
        return "Even";
    }
    return "Odd";
}

if (isset($_GET['check'])) {
    $num = filter_var($_GET['number'], FILTER_VALIDATE_INT);
    if ($num != false) {
        echo checkIsEvenOdd($num);
    } else {
        echo 'Invalid type of input';
    }


}

?>
<form method="get">
    Enter number:<input type="text" name="number" title=""><br/>
    <input type="submit" name='check' value="Check">
</form>