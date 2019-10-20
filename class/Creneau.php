<?php

class Creneau
{
    public $debut;

    public $fin;

    public function __construct(int $debut, int $fin)
    {
        $this->debut = $debut;
        $this->fin = $fin;
    }

    public function inclureHeure(int $heure): bool
    {
        return $heure >= $this->debut && $heure <= $this->fin;
    }

    public function intersect(Creneau $creneau): bool
    {

    }
}