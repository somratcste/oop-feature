<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//require_once __DIR__ . '/SundorPatri.php';
//require_once __DIR__ . '/MotamutiSundorPatri.php';

//$patri1 = new SundorPatri();
//$patri2 = new MotamutiSundorPatri();

//print $patri1->getName();
//echo "<br>";
//print $patri2->getName();


require_once __DIR__ . '/Patri.php';

$patri = new Patri();
echo $patri->sundor();
echo "<br>";
echo $patri->motamutiSundor();