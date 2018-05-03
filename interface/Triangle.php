<?php

require_once __DIR__. '/Shape.php';

class Triangle implements Shape
{
    private $color = null;

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function describe()
    {
        return sprintf("I'm an %s => %s", $this->getColor(), get_class($this));
    }
}