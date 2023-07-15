<?php
require "Film.php";
require "Genre.php";
require "Acteur.php";
require "Personne.php";
require "Role.php";
require "Realisateur.php";
require "Casting.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema POO</title>
</head>
    <body>
    <?php

    $dureeFilm = new DateTime('2023-07-15 14:30:00'); // Exemple d'objet DateTime représentant la durée du film
    $duree_en_minutes->calculDuree($dureeFilm);
    echo "La durée du film est de $duree_en_minutes minutes.";

    ?>
    
    </body>
</html>