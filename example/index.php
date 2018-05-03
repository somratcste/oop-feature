<?php

require_once __DIR__ . '/Patri.php';

$patri = new Patri();
$patri->setType('sundor');
print $patri->getName();
