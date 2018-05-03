<?php

abstract class Animal
{
    public $name;
    public $age;

    public function describe()
    {
        return $this->name. ", has ". $this->age. " years old";
    }

    abstract public function greet();
}