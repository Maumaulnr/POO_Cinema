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

    // Récupérer les informations du role
    public function getInfosFilm() {
        return $this->getRole();
    }

    // Ajouter le role au casting
    public function ajouterCasting(Casting $castings) {
        $this->castings[] = $castings;
    }

    // Méthode magique __toString
    public function __toString() {
        return $this->getRole(). " ";
    }
}

?>