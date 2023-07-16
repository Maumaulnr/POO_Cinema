<?php

// On récupére les informations de la classe parent Personne
class Realisateur extends Personne {
    // private string $filmDirigesPar;

    // Constructeur
    public function __construct(string $nom, string $prenom, string $sexe, string $DateDeNaissance) {
        parent::__construct($nom, $prenom, $sexe, $DateDeNaissance);
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
    public function getInfosFilm() {
        return $this->getNom(). " ". $this->getPrenom(). " ". $this->getSexe(). " ". $this->getDateDeNaissance();
    }
}

?>