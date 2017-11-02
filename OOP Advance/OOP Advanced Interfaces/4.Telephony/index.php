<?php
use Tel\Smartphone;
include "ibrowsingWorldWeb.php";
include "iCallOtherPhones.php";
include "Smartphone.php";
$phones=trim(fgets(STDIN));
$sites=trim(fgets(STDIN));

$phones=explode(" ",$phones);
$resultPhones=new Smartphone();
echo $resultPhones->callPhones($phones);

$sites=explode(" ",$sites);
$resultSites=new Smartphone();
echo $resultSites->browsingWeb($sites);