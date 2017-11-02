<?php
$init = 467;
$hours = floor($init / 3600);
$minutes = floor(($init / 60) % 60);
$seconds = $init % 60;

echo $hours."h ".$minutes."m ".$seconds."s";