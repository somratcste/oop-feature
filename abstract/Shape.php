<?php


abstract class Shape
{
    abstract protected function getColor();

    abstract protected function setColor($color);

    public function describe()
    {
        return sprintf("I am an %s => %s", $this->getColor(), get_class($this));
    }
}