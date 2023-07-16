<?php

// on récupére les informations de la classe Personne pour les attribuer à l'acteur
class Acteur extends Personne {
    private array $films;

    // Constructeur
    public function __construct(string $nom, string $prenom, string $sexe, string $dateDeNaissance) {
        parent::__construct($nom, $prenom, $sexe, $dateDeNaissance);

        // Tableau vide des films
        $this->films = [];
    }

    // Méthodes

    // ajouter film à la liste des films d'un acteur
    public function ajouterFilmPourActeur(Film $film) {
        $this->films[] = $film;
    }
    
    // On récupère les informations sur la personne pour l'attribuer à l'acteur ou actrice
    public function afficherFilms() {
       echo $this->getPrenom(). " ". $this->getNom();

       // Pour chaque film, ajouter l'acteur
       foreach ($this->films as $acteur) {
        echo $acteur;
       }
    }

    // Méthode magique __toString
    public function __toString() {
        return $this->getPrenom(). " ". $this->getNom(). "<br>";
    }
}

?>