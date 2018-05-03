<?php

require_once __DIR__. '/SPatri.php';

class Patri implements SPatri
{
    private $type = null;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getName()
    {
        return $this->type;
    }
}