<?php
require 'Compteur.php';

class DoubleCompteur extends Compteur
{
    const INCREMENT = 10;

    public function recuperer(): int {
        return (int) file_get_contents($this->fichier) * 2;
    }
}