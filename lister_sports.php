<?php
// lister_sports.php
include 'db.php';  // Inclusion du fichier de connexion à la BDD
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css-pour-utilisateur/lister_sports.css">
    <title>Liste des Sports</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" /> 
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

    <!-- Section principale pour afficher les sports -->
    <main>
        <h1>Liste des Sports</h1>

    <!-- Tableau pour afficher la liste des sports -->
    <table>
        <thead>
            <tr>
                <th>Sport</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            // Requête pour récupérer les sports depuis la BDD
            $sql = "SELECT s.* FROM SPORT s";
            $stmt = $pdo->query($sql);

            // Boucle pour afficher chaque sport dans une ligne du tableau
            while ($row = $stmt->fetch()) {
                echo "<tr>";
          
                echo "<td>" . $row['nom_sport'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p class="paragraph-link">
            <a class="link-home" href="index.php">Retour Accueil</a>
        </p>

    </main>

    <footer>
        <figure>
            <img src="images/Logo_JO_d'été_-_Los_Angeles_2028.svg.png" alt="logo Jeux Olympiques - Los Angeles 2028">
        </figure>

</body>
</html>
