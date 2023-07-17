<?php
require_once 'Personne.php';

// On récupére les informations de la classe parent Personne
class Realisateur extends Personne {
    private array $filmsRealises;

    // Constructeur
    public function __construct(string $nom, string $prenom, string $sexe, string $DateDeNaissance) {
        parent::__construct($nom, $prenom, $sexe, $DateDeNaissance);
        $this->filmsRealises = [];
    }

    // Méthodes

    // ajouter function film réalisé par
    public function ajouterRealisateurFilm(Film $film) {
        $this->films[] = $film;
    }

    // Récupérer les infos du réalisateur
    public function afficherRealisateurFilm() {
        echo $this->getNom(). " ". $this->getPrenom(). " ". $this->getSexe(). " ". $this->getDateDeNaissance(). "<br>";

         // Pour chaque film réalisé ajouter film
         foreach ($this->filmsRealises as $filmRealise) {
            echo $filmRealise;
        }
    }

    // Méthode magique __toString
    public function __toString() {
        return $this->getNom(). " ". $this->getPrenom(). " ". $this->getSexe(). " ". $this->getDateDeNaissance();
    }
}

?>