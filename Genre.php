<?php

class Genre {
    private string $genreFilm;
    private array $films;

    // Constructeur
    public function __construct(string $genreFilm) {
        $this->genreFilm = $genreFilm;
        $this->films = [];
    }

    // Getter et setter GenreFilm
    public function getGenreFilm() : string {
        return $this->genreFilm;
    }

    public function setGenreFilm($genreFilm) {
        $this->genreFilm = $genreFilm;
        return $this;
    }

    // Méthodes

    // ajouter un film à un tableau films
    public function ajouterFilms(Film $film) {
        $this->films[] = $film;

    }

    // afficher une liste de films par genre avec leur titre
    public function afficherGenreFilms(string $genreFilm) {
        echo $this->getGenreFilm;
        // Pour chaque genre, afficher le titre
        // foreach ($this->films as $titre) {
        //     echo $this->getTitre(). "<br>";
        // }
    }
}

?>