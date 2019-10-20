<?php
class Creneau {

    public $debut;

    public $fin;

    public function __construct (int $debut, int $fin) 
    {
        $this->debut = $debut;
        $this->fin = $fin;
    }

    public function toHTML (): string
    {
        return "<strong>{$this->debut}h</strong> à <strong>{$this->fin}h</strong>";
    }

    public function inclusHeure (int $heure): bool 
    {
        return $heure >= $this->debut && $heure <= $this->fin;
    }

    public function intersect (Creneau $creneau): bool
    {
        return $this->inclusHeure($creneau->debut) ||
            $this->inclusHeure($creneau->fin) ||
            ($this->debut > $creneau->debut && $this->fin < $creneau->fin);
    }

}