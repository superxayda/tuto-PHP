<?php

class Compteur
{

    const INCREMENT = 1;

    /**
     * @var string
     */
    protected $fichier;

    public function __construct(string $fichier)
    {
        $this->fichier = $fichier;
    }

    public function incrementer()
    {
        $compteur = 1;
        if (file_exists($this->fichier)) {
            $compteur = (int)file_get_contents($this->fichier);
            $compteur += static::INCREMENT;
        }
        file_put_contents($this->fichier, $compteur);
    }

    public function recuperer(): int {
        return (int) file_get_contents($this->fichier);
    }

}