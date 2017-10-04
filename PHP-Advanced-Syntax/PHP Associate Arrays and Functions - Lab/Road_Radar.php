<?php
$speed = trim(fgets(STDIN));
$zone = trim(fgets(STDIN));

function getLimit($zone)
{
    $limit = 0;
    if ($zone == 'motorway') {
        $limit = 130;
    } elseif ($zone == 'interstate') {
        $limit = 90;
    } elseif ($zone == 'city') {
        $limit = 50;
    } elseif ($zone == 'residential') {
        $limit = 20;
    } else {
        echo "Not valid input";
    }
    return $limit;
}
function get_infraction($speed, $limit)
{
    $overSped = $speed - $limit;
    if ($overSped <= 0) {
        $result = false;
    } else {
        $result = true;
    }
    return$result;
}

$limit = getLimit($zone);
$infraction=get_infraction($speed,$limit);

$overSped=$speed-$limit;
//echo $overSped;speeds up to 20 km/h over the limit,
// he’s speeding; for speeds up to 40 over the limit, the infraction is excessive
// speeding and for anything else, reckless driving.
if($infraction){
if ($overSped<=20){
    echo "speeding";
}elseif($overSped<=40){
    echo "excessive speeding";
}else{
        echo "reckless driving";
    }
}else{
    echo " ";

}