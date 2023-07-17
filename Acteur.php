<?php
require_once 'Personne.php';

// on récupére les informations de la classe Personne pour les attribuer à l'acteur
class Acteur extends Personne {
    private array $castings;

    // Constructeur
    public function __construct(string $nom, string $prenom, string $sexe, string $dateDeNaissance) {
        parent::__construct($nom, $prenom, $sexe, $dateDeNaissance);

        // Tableau vide des castings
        //tableau castings
        $this->castings = [];
    }

    // Méthodes

    // ajouter film à la liste des films d'un acteur
    public function ajouterCasting(Casting $casting)
    {
        $this->castings[]=$casting;
    }

    // Afficher acteur
    public function afficherCasting() {
        echo "<br>";

        foreach ($this->castings as $casting) {
            echo $casting;
        }
    }
    
    // On récupère les informations sur la personne pour l'attribuer à l'acteur ou actrice
    public function afficherActeurs() {
    //    echo $this->getNom(). " ". $this->getPrenom(). " ". $this->getSexe(). " ". $this->getDateDeNaissance(). "<br>";

       // Pour chaque castings, ajouter le titre du film, le titre du role et le nom de l'acteur
       foreach ($this->castings as $casting) {
        echo $casting. "<br>";
       }
    }

    // Méthode magique __toString
    public function __toString() {
        return $this->getNom(). " ". $this->getPrenom(). " ". $this->getSexe(). " ". $this->getDateDeNaissance();
    }
}

?>