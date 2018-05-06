<?php

class Patri
{
    public function getPatri()
    {
        return 'this is from patri';
    }

    public function sundor()
    {
        $fileName = SundorPatri::class;
        require_once __DIR__ . '/'. $fileName . '.php';
        $sundorPatri = new SundorPatri();
        return $sundorPatri->getName();
    }

    public function motamutiSundor()
    {
        $fileName = MotamutiSundorPatri::class;
        require_once __DIR__ . '/'. $fileName . '.php';
        $motamutiSundor = new MotamutiSundorPatri();
        return $motamutiSundor->getName();
    }
}