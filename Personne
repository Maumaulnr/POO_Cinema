<?php

class Personne {
    private string $nom;
    private string $prenom;
    private string $sexe;
    private DateTime $dateDeNaissance;
    private array $films;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateDeNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->dateDeNaissance = new DateTime($dateDeNaissance);
        // tableau vide pour les films
        $this->films = [];
    }

    // Getter et setter

    // Nom de la personne
    public function getNom() : string {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    // Prénom de la personne
    public function getPrenom() : string {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    // Sexe de la personne
    public function getSexe() : string {
        return $this->sexe;
    }

    public function setSexe($sexe) {
        $this->sexe = $sexe;
        return $this;
    }

    // Date de naissance de la personne
    public function getDateDeNaissance() : string {
        return $this->dateDeNaissance->format('d-m-Y');
    }

    public function setDateDeNaissance($dateDeNaissance) {
        $this->dateDeNaissance = $dateDeNaissance->format('d-m-Y');
        return $this;
    }

    // Méthodes

    // Fonction pour calculer l'âge de la personne
    public function calculerAge() {
        $dateActuelle = new DateTime();
        $dateDeNaissance = $this->dateDeNaissance;
        // calcul de l'âge
        $difference = date_diff($dateDeNaissance, $dateActuelle);
        return $difference->y;
    }

    // On ajoute un film à chaque boucle
    public function ajouterFilm(Film $film) {
        $this->films[] = $film;

        foreach ($this->films as $film) {
            $films = $film->getInfosFilm();
        }

        return $films;
    }

    // On récupère les informations sur le nom et prénom de la personne
    public function getInfosTousLesFilms() {
        $films = $this->getNom(). " ". $this->getPrenom(). "<br>";
    }
}

?>