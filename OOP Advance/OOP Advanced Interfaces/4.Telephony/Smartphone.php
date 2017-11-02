<?php

namespace Tel;


class Smartphone implements iCallOtherPhones, ibrowsingWorldWeb
{

    public function callPhones(array $phones)
    {
        foreach ($phones as $k => $phone) {
            if (ctype_digit($phone)) {
              echo "Calling... $phone".PHP_EOL;
            } else {
                echo "Invalid number!".PHP_EOL;
            }
        }
    }

    public function browsingWeb(array $sites)
    {
        foreach ($sites as $k => $site) {
            if (!preg_match('~[0-9]~', $site)) {
                echo "Browsing: $site!" . PHP_EOL;
            } else {
                echo "Invalid URL!" . PHP_EOL;
            }

        }
    }


}