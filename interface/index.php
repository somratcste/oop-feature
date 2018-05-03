<?php

require_once  __DIR__. '/Triangle.php';

// use of interface
$triangle = new Triangle();
$triangle->setColor('Orange');
print $triangle->describe();