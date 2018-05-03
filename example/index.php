<?php

require_once __DIR__ . '/SundorPatri.php';
//require_once __DIR__ . '/MotamutiSundorPatri.php';

$patri1 = new SundorPatri();
//$patri2 = new MotamutiSundorPatri();

print $patri1->getName();
echo "<br>";
//print $patri2->getName();
