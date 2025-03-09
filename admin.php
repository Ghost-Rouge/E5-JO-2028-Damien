<?php
// lister_resultats.php
include 'db.php';  // Inclusion du fichier de connexion à la base de données
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css-pour-utilisateur/admin.css"> 
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" /> 
    <link rel="stylesheet" href="css/css-pour-utilisateur/style-prof.css">
    <title>Résultats des Épreuves</title>
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
    <h1>Connexion</h1>
        <form action="verif.php" method="post">
            <label for="login">Login :</label>
            <input type="text" name="login" id="login" required><br><br>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" required><br><br>
            <input type="submit" value="Se connecter">
        </form>
    </main>

    <footer>
        <figure>
            <img src="images/Logo_JO_d'été_-_Los_Angeles_2028.svg.png" alt="logo jeux olympiques 2028">
        </figure>
    </footer>
   
</body>
</html>