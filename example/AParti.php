<?php

require_once __DIR__ . '/IPatri.php';

abstract class AParti implements IPatri
{
    public $name;

    public function getName(){
        return $this->name;
    }
}