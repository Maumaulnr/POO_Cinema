<?php

// on récupére les informations de la classe Personne pour les attribuer à l'acteur
class Acteur extends Personne {
    private array $castings;

    // Constructeur
    public function __construct(string $nom, string $prenom, string $sexe, string $dateDeNaissance) {
        parent::__construct($nom, $prenom, $sexe, $dateDeNaissance);

        // Tableau vide des castings
        $this->castings = [];
    }

    // Méthodes

    // On récupéère les informations sur la personne pour l'attribuer à l'acteur ou actrice
    // si l'acteur est de sexe masculin alors donner le descriptif pour un acteur
    // sinon pour une femmme donner le descriptif pour une actrice
    public function getInfosFilm() {
        if ($this->getSexe() == "Masculin") {
            return $this->getNom(). " ". $this->getPrenom(). " ". $this->getSexe(). " ". $this->getDateDeNaissance(). "<br>". $this->calculerAge(). " ans <br>";
        } else {
            return $this->getNom(). " ". $this->getPrenom(). $this->getSexe(). " ". $this->getDateDeNaissance(). "<br>". $this->calculerAge(). " ans <br>";
        }
    }

    // Fonction ajouterCasting pour ajouter les acteurs au casting
    public function ajouterCasting(Casting $castings) {
        $this->castings[] = $castings;
    }

    // Méthode magique __toString
    public function __toString() {
        return $this->getPrenom(). " ". $this->getNom(). "<br>";
    }
}

?>