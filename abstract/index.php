<?php

// when use triangle class
require_once __DIR__. '/Triangle.php';

// by using triangle class
$triangle = new Triangle();

// use of abstract
$triangle->setColor('Orange');
print $triangle->describe();

echo "<br>";

// method chaining
print $triangle->setName('Nazmul')->getName();


// when use dog class
require_once __DIR__. '/Dog.php';

$animal = new Dog();
$animal->name = 'Bob';
$animal->age = '21';

// use of abstract with public variable and call parent
print $animal->greet();
echo "<br>";
print $animal->describe();


