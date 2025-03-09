<?php
// index.php
session_start();
include 'db.php';  // Inclusion du fichier de connexion à la BDD
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - JO 2028</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" /> 
    <link rel="stylesheet" href="css/css-pour-utilisateur/style.css">
    <link rel="stylesheet" href="css/css-pour-utilisateur/style-prof.css">
</head>
<body>
    
<header>
    <nav>
         <a href="index.php">Accueil</a>
        <a href="lister_sports.php">Sport</a>
        <a href="lister_epreuves.php">Calendrier des Épreuves</a>
        <a href="lister_resultats.php">Résultats</a>
        <a href="admin.php">Accès Administrateur</a>
    </nav>
    </header>
    <main>
        <p class="category-site">
            <a class="link-category" href="lister_sports.php">Sports</a>
            <a class="link-category" href="lister_epreuves.php">Calendrier des épreuves</a>
            <a class="link-category" href="lister_resultats.php">Résultats</a>
        </p>
        </main>

    <footer>
        <figure>
            <img src="images/Logo_JO_d'été_-_Los_Angeles_2028.svg.png" alt="Logo des Jeux Olympiques - Los Angeles 2028">
        </figure>
    </footer>

</body>
</html>
