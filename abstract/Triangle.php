<?php

require_once __DIR__. '/Shape.php';

class Triangle extends Shape
{
    private $color = null;

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
}