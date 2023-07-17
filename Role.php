<?php

class Role {
    private string $titreRole;
    private array $castings;

    // Constructeur
    public function __construct(string $titreRole) {
        $this->titreRole = $titreRole;
        // $film->ajouterFilm($this);
       
        // $acteur->ajouterActeur($this);
        // Tableau vide pour les castings
        $this->castings = [];
    }

    // Getter et setter

    // titrtitreRole
    public function getTitreRole() : string {
        return $this->titreRole;
    }

    public function setTitreRole($titreRole) {
        $this->titreRole = $titreRole;
        return $this;
    }

 

    // Méthodes

    // Ajouter le titreRole au casting
    public function ajouterCasting(Casting $casting) {
        $this->castings[] = $casting;
    }

    public function afficherRole() {
        // Pour chaque castings, donner le titre du rôle
        foreach($this->castings as $role) {
            echo $role->getRole()->getTitreRole(). "<br>";
            // var_dump($role->getRole()->getTitreRole());
        }
    }
    // on veut afficher toutes les informations sur les rôles
    // public function affichertitrtitreRole() {
    //     echo $this->gettitrtitreRole(). " ". $this->getFilm(). " ". $this->getActeur(). "<br>";

    //     // Pour chaque casting, afficher l'acteur et son rôle
    //     foreach ($this->castings as $casting) {
    //         echo $casting;
    //     }
    // }

    // Méthode magique __toString
    public function __toString() {
        return $this->getTitreRole();
    }
}

?>