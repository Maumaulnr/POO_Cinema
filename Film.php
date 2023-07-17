<?php

class Film {
    private string $titre;
    private DateTime $dateDeSortie;
    private int $dureeFilm;
    private Realisateur $realisateurFilm;
    private string $synopsisFilm;
    private array $castings;

    // Constructeur
    public function __construct(string $titre, string $dateDeSortie, int $dureeFilm, Realisateur $realisateurFilm, string $synopsisFilm) {
        $this->titre = $titre;
        $this->dateDeSortie = new DateTime($dateDeSortie);
        $this->dureeFilm = $dureeFilm;
        $this->realisateurFilm = $realisateurFilm;
        $realisateurFilm->ajouterRealisateurFilm($this);
        $this->synopsisFilm = $synopsisFilm;
        // tableau vide des castings
        $this->castings = [];
    }

    // Titre
    public function getTitre() : string {
        return $this->titre;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
        return $this;
    }

    // Date de sortie
    public function getDateDeSortie() : string {
        return $this->dateDeSortie->format('d-m-Y');
    }

    public function setDateDeSortie($dateDeSortie) {
        $this->dateDeSortie = $dateDeSortie->format('d-m-Y');
        return $this;
    }

    // Durée du film
    public function getDureeFilm() : int {
        return $this->dureeFilm; // format en minutes
    }

    public function setDureeFilm($dureeFilm) {
        $this->dureeFilm = $dureeFilm;
        return $this;
    }

    // Réalisateur du film
    public function getRealisateurFilm() : Realisateur {
        return $this->realisateurFilm;
    }

    public function setRealisateurFilm($realisateurFilm) {
        $this->realisateurFilm = $realisateurFilm;
        return $this;
    }

    // Synopsis du film
    public function getSynopsisFilm() : string {
        return $this->synopsisFilm;
    }

    public function setSynopsisFilm($synopsisFilm) {
        $this->synopsisFilm = $synopsisFilm;
        return $this;
    }

    // Méthodes

    // // fonction pour calculer la durée en minutes
    // public function calculDuree(int $minutes) {
    //     // 1H = 60 min donc on par exemple Batman de Tim Burton dure 2h06min
    //     // (2h x 60min) + 6min
    //     $heures = $dureeMinutes;
    //     $dureeMinutes = $heures * 60 + $minutes;
    //     return $dureeMinutes;
        
    //     // Pour chaque film et leur durée, transformer chaque durée de film en minutes
    //     foreach ($films as $film => $dureeFilm) {
    //         $heures = $dureeFilm['heures'];
    //         $minutes = $dureeFilm['minutes'];
    //         $dureeTotale = calculDuree($minutes);
    //     }
    // }

    
    // on veut afficher toutes les informations sur les rôles
    public function afficherFilms() {
        echo "Infos films : <br>". $this->getTitre(). " ( ". $this->getDateDeSortie(). " ), Durée : ". $this->getDureeFilm(). " min, Réalisateur : ". $this->getRealisateurFilm(). " <br> ". $this->getSynopsisFilm(). "<br><br>";

        // Pour chaque casting, afficher l'acteur et son rôle
        foreach ($this->castings as $acteur => $role) {
            echo "Acteur : ". $acteur. "<br>";
            echo "Personnage : ". $role. "<br>";
        }
    }

    // public function afficherActeurs() {
    //     echo $this->getNom(). " ". getPrenom(). " ".
    // }


    // Méthode magique __toString
    public function __toString() {
        return $this->titre. " ". $this->dateDeSortie. " ". $this->dureeFilm. " ". $this->realisateurFilm. " ". $this->synopsisFilm;
    }

}

?>