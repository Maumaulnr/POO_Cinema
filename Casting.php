<?php

class Casting {
    private array $films;

    // Constructeur
    public function __construct() {
        $this->films = [];
    }

    // Fonction ajouterFilm
    public function ajouterFilm($film) {
        $this->films[] = $film;
    }
}

?>