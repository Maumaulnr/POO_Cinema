<?php

class Role {
    private string $role;
    private array $castings;

    // Constructeur
    public function __construct(string $role) {
        $this->role = $role;
        // Tableau vide pour les castings
        $this->castings = [];
    }

    // Getter et setter

    // Role
    public function getRole() : string {
        return $this->role;
    }

    public function setRole($role) {
        $this->role = $role;
        return $this;
    }

    // Méthodes

    // Ajouter le role au casting
    public function ajouterCasting(Casting $castings) {
        $this->castings[] = $castings;
    }

    // on veut afficher toutes les informations sur les rôles
    public function afficherRole() {
        echo $this->role. "<br>";

        // Pour chaque casting, afficher l'acteur et son rôle
        foreach ($this->castings as $role) {
            echo "Titre : ". $this->titre. "<br>";
            echo "Personnage : ". $this->role. "<br>";
        }
    }

    // Méthode magique __toString
    public function __toString() {
        return $this->getRole();
    }
}

?>