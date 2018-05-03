<?php

require_once __DIR__. '/Animal.php';

class Dog extends Animal
{
    public function greet()
    {
        return 'Woof !';
    }

    public function describe()
    {
        return parent::describe(). 'and I am a dog.';
    }
}