<?php

// On récupére les informations de la classe parent Personne
class Realisateur extends Personne {
    private array $filmsRealises;

    // Constructeur
    public function __construct(string $nom, string $prenom, string $sexe, string $DateDeNaissance) {
        parent::__construct($nom, $prenom, $sexe, $DateDeNaissance);
        $this->filmsRealises = [];
    }

    // Getter et setter FilmDirigesPar
    // public function getFilmDirigesPar() : string {
    //     return $this->filmDirigesPar;
    // }

    // public function setFilmDirigesPar($filmDirigesPar) {
    //     $this->filmDirigesPar = $filmDirigesPar;
    //     return $this;
    // }

    // Méthodes

    // ajouter function film réalisé par
    public function ajouterFilmRealisePar(Film $film) {
        $this->filmsRealises[] = $film;
    }

    // Récupérer les infos du réalisateur
    public function afficherFilms() {
        return $this->getNom(). " ". $this->getPrenom(). " ". $this->getSexe(). " ". $this->getDateDeNaissance();

         // Pour chaque film réalisé ajouter film
         foreach ($this->filmsRealises as $film) {
            echo $film;
        }
    }
}

?>