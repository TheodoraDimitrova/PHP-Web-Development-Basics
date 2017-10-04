<?php
$input = trim(fgets(STDIN));
$loginArr = [];

while ($input != "login") {
    $inputArr = explode("->", $input);
    $username = trim($inputArr[0]);
    $password = trim($inputArr[1]);

    if (!array_key_exists($username, $loginArr)) {
        $loginArr[$username] = $password;
    }

    $input = trim(fgets(STDIN));
}
//print_r($loginArr);
/*[ivan_ivanov] => java123
[pesh0] => qwerty
[stamat4e] => 111111
[princess_penka] => MyPrince
*/
$input = trim(fgets(STDIN));
$count = 0;
while ($input != "end") {
    $inputArr = explode("->", $input);
    $usernameTry = trim($inputArr[0]);
    $passwordTry = trim($inputArr[1]);

    if (array_key_exists($usernameTry, $loginArr)) {
        if ($loginArr[$usernameTry] == $passwordTry) {
            echo $usernameTry . ": logged in successfully" . PHP_EOL;
        } else {
            $count++;
            echo $usernameTry . ": login failed" . PHP_EOL;
        }

    } else {
        $count++;
        echo $usernameTry . ": login failed" . PHP_EOL;
    }
    $input = trim(fgets(STDIN));
}


echo "unsuccessful login attempts: " . $count;