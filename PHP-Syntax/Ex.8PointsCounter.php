<?php//trudna
$teamScore = array();//durji otbor->obshto tochki
$teamInfo = array();//durji otbor-igrach-tochki

while ($line = trim(fgets(STDIN)) and $line != "Result") {//chetem svichki redove razlichno ot result

    $forbiden =  array("@", "%", "$", "*");
    $cleanLine = str_replace($forbiden, "", $line);

    $data = explode('|', $cleanLine);
   // print_r($data);
    if ($data[0] === strtoupper($data[0])) {
        $team = $data[0];
        $player = $data[1];
    } else {
        $team = $data[1];
        $player = $data[0];
    }
    $points = $data[2];
    $teamInfo[$team][$player] = $points;

}
foreach ($teamInfo as $teams => $arrPlyerPoints) {//value e masiv

    arsort($arrPlyerPoints);//podrejda v nizhodqsht red igrachite i tochkite im


    if (!array_key_exists($teams, $teamScore)){

        $teamScore[$teams] = 0;
    }

    foreach($arrPlyerPoints as $player => $points) {

        $teamScore[$teams] += $points;
    }


}
arsort($teamScore);//podrejdane na otborite ot otbora s nai mnogo tochki kum otbora s nai malko
//print_r($teamScore);
print_r($teamInfo);
foreach ($teamScore as $team => $totlPoins) {

    echo $team . " -> " . $totlPoins . "\n";
    echo "Most points scored by " . key($teamInfo[$team]) . "\n";//vrushta purviqt kluch na pod masiva imeto na igracha
   // $subjects = array("Subject1" => "Physics", "Subject2" => "Chemistry", "Subject3" => "Biology");
   // echo "Current position Key is : " . key($subjects);

}