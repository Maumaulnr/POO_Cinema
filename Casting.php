<?php

class Casting {
    private Film $film;
    private Role $role;
    private Acteur $acteur;

    // Constructeur
    public function __construct(Film $film, Role $role, Acteur $acteur) {
        $this->film = $film;
        $this->role = $role;
        $this->acteur = $acteur;
    }

    // Getter et setter

    // Film
    public function getFilm() : Film {
        return $this->film;
    }

    public function setFilm($film) {
        $this->film = $film;
        return $this;
    }

    // Role
    public function getRole() : Role {
        return $this->role;
    }

    public function setRole($role) {
        $this->role = $role;
        return $this;
    }

    // Acteur
    public function getActeur() : Acteur {
        return $this->acteur;
    }

    public function setActeur($acteur) {
        $this->acteur = $acteur;
        return $this;
    }

    // // Fonction ajouterFilm
    // public function ajouterFilm($film) {
    //     $this->films[] = $film;
    // }
}

?>