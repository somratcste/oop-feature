<?php

require_once __DIR__. '/Triangle.php';

$triangle = new Triangle();

// use of abstract
$triangle->setColor('Orange');
print $triangle->describe();

echo "<br>";

// method chaining
print $triangle->setName('Nazmul')->getName();

