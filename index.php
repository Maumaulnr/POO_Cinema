<?php
require 'Film.php';
require 'Genre.php';
require 'Acteur.php';
require 'Personne.php';
require 'Role.php';
require 'Realisateur.php';
require 'Casting.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cinema POO</title>
    </head>
    <body>

    <!-- http://localhost/LENOIR-Maurane/POO_Cinema/index.php -->

    <?php

    // On instancie les acteurs
    $acteurFord = new Acteur("FORD", "Harrison", "Masculin", "13-07-1942");
    $acteurBale = new Acteur("BALE", "Christian", "Masculin", "30-01-1974");
    $acteurHathaway = new Acteur("HATHAWAY", "Anne", "Féminin", "12-11-1982");

    // On instancie les réalisateurs
    $realisateurNolan = new Realisateur("NOLAN", "Christopher", "Masculin", "30-07/1970");
    $realisateurScott = new Realisateur("SCOTT", "Ridley", "Masculin", "30-11-1937");

    // On instancie le casting
    $casting1 = new Casting($filmBladeRunner, $role1, $acteurFord);
    $casting2 = new Casting($film2, $role2, $acteurBale);
    $casting3 = new Casting($film2, $role3, $acteurHathaway);

    // On instancie les genres
    $genreScienceF = new Genre("Science-Fiction");
    $genreAction = new Genre("Action");
    $genreFantastique = new Genre("Fantastique");

    // On instancie les films et leur résumé
    $filmBladeRunner = new Film("Blade Runner", 1982, 117, "Ridley Scott","Dans les dernières années du 20ème siècle, des milliers d'hommes et de femmes partent à la conquête de l'espace, fuyant les mégalopoles devenues insalubres. Sur les colonies, une nouvelle race d'esclaves voit le jour : les répliquants, des androïdes que rien ne peut distinguer de l'être humain. Los Angeles, 2019. Après avoir massacré un équipage et pris le contrôle d'un vaisseau, les répliquants de type Nexus 6, le modèle le plus perfectionné, sont désormais déclarés «hors la loi». Quatre d'entre eux parviennent cependant à s'échapper et à s'introduire dans Los Angeles. Un agent d'une unité spéciale, un blade-runner, est chargé de les éliminer. Selon la terminologie officielle, on ne parle pas d'exécution, mais de retrait...");

    $filmTheDarkKnightRises = new Film("The Dark Knight Rises", 2012, 164, "Christopher Nolan", "Il y a huit ans, Batman a disparu dans la nuit : lui qui était un héros est alors devenu un fugitif. S'accusant de la mort du procureur-adjoint Harvey Dent, le Chevalier Noir a tout sacrifié au nom de ce que le commissaire Gordon et lui-même considéraient être une noble cause. Et leurs actions conjointes se sont avérées efficaces pour un temps puisque la criminalité a été éradiquée à Gotham City grâce à l'arsenal de lois répressif initié par Dent.
    Mais c'est un chat – aux intentions obscures – aussi rusé que voleur qui va tout bouleverser. À moins que ce ne soit l'arrivée à Gotham de Bane, terroriste masqué, qui compte bien arracher Bruce à l'exil qu'il s'est imposé. Pourtant, même si ce dernier est prêt à endosser de nouveau la cape et le casque du Chevalier Noir, Batman n'est peut-être plus de taille à affronter Bane…");

    $filmInterstellar = new Film("Interstellar", 2014, 169, "Christopher Nolan", "Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.");

    // On instancie les rôles
    $role1 = new Role("Rick Deckard", $filmBladeRunner, $acteurFord);
    $role2 = new Role("Batman", $filmTheDarkKnightRises, $acteurBale);
    $role3 = new Role("Catwoman", $filmTheDarkKnightRises, $acteurHathaway);
    $role4 = new Role("Amelia Brand", $filmInterstellar, $acteurHathaway);

    // On veut lister des acteurs ayant incarné un rôle précis
    // ex: les acteurs ayant joué le rôle de Batman : Michael Keaton, Val Kilmer, George Clooney, ...



    // On veut lister le casting d'un film
    // ex : dans le film Star Wars Episode IV, Han Solo a été incarné par Harrison Ford, Luke Skywalker a été incarné par Mark Hamill, ...



    // On veut lister les films par genre
    // ex : le genre SF est associé à X films : Star Wars, Blade Runner, ...



    // On veut lister la filmographie d'un acteur
    // Dans quel film a-t-il joué?



    // On veut lister la filmographie d'un réalisateur
    // Quels sont les films qu'a réalisé ce réalisateur?





    // $dureeFilmEnHeures = 2;
    // $dureeFilmEnMinutes = 6;

    // $dureeFilmEnMinutesTotales = calculDuree($dureeFilmEnHeures, $dureeFilmEnMinutes);
    // echo $dureeFilmEnMinutesTotales;

    ?>
    
    </body>
</html>