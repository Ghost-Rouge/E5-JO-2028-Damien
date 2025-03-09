<?php
// lister_resultats.php
include 'db.php';  // Inclusion du fichier de connexion à la base de données
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css-pour-admin/Accueil_admin.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" /> 
    <link rel="stylesheet" href="css/css-pour-utilisateur/style-prof.css">
    <title>Accueil Administrateur</title>
</head>
<body>

<header>
        <nav>
            <!-- Menu vers les pages sports, events, et results -->
            <ul class="menu">
                <li><a href="Accueil-admin.php">Accueil Administration</a></li>
                <li><a href="modification-gestion-sports.php">Gestion Sports</a></li>
                <li><a href="modification-gestion-lieu.php">Gestion Lieux</a></li>
                <li><a href="modification-gestion-calendrier.php">Gestion Calendrier</a></li>
                <li><a href="modification-gestion-pays.php">Gestion Pays</a></li>
                <li><a href="modification-gestion-genres.php">Gestion Athlètes</a></li>
                <li><a href="modification-gestion-athletes.php">Gestion Résultats</a></li>
                <li><a href="modification-gestion-resultats.php">Gestion utilisateurs</a></li>
                <li><a href="deconnexion.php">Déconnexion</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <p class="info-login">
            Bonjour Super Admin
        </p>
        <p class="category-site">
            <a class="link-category" href="Accueil-admin.php">Gestion Administrateurs</a>
            <a class="link-category" href="modification-gestion-sports.php">Gestion Sports</a>
            <a class="link-category" href="modification-gestion-lieu.php">Gestion Lieux</a>
            <a class="link-category" href="modification-gestion-calendrier.php">Gestion Calendrier</a>
            <a class="link-category" href="modification-gestion-pays.php">Gestion Pays</a>
            <a class="link-category" href="modification-gestion-athletes.php">Gestion Athlètes</a>
            <a class="link-category" href="modification-gestion-resultats.php">Gestion Résultats</a>
        </p>
    </main>
    <footer>
        <figure>
            <img src="images/Logo_JO_d'été_-_Los_Angeles_2028.svg.png" alt="logo jeux olympiques 2028">
        </figure>
    </footer>
</body>
</html>