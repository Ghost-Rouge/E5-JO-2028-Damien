<?php
// lister_epreuves.php
include 'db.php';  // Inclusion du fichier de connexion à la base de données
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css-pour-utilisateur/lister_epreuves.css">
    <title>Calendrier des Épreuves</title>
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
    <main>
        <h1>Calendrier des Épreuves</h1>

    <!-- Tableau pour afficher la liste des épreuves -->
    <table>
        <thead>
            <tr>
                <th>Épreuve</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Lieu</th>
                <th>Sport</th>
            </tr>
        </thead>
        <tbody>
    <?php
    // Requête pour récupérer les épreuves, leurs lieux et sports associés depuis la base de données
    $sql = "SELECT e.nom_epreuve, e.date_epreuve, e.heure_epreuve, l.nom_lieu, s.nom_sport
            FROM EPREUVE e
            JOIN LIEU l ON e.id_lieu = l.id_lieu
            JOIN SPORT s ON e.id_sport = s.id_sport";
    $stmt = $pdo->query($sql);

    // Boucle pour afficher chaque épreuve dans une ligne du tableau
    while ($row = $stmt->fetch()) {
        // Conversion de la date et de l'heure au format souhaité
        $date = DateTime::createFromFormat('Y-m-d', $row['date_epreuve']);
        $heure = DateTime::createFromFormat('H:i:s', $row['heure_epreuve']);
        
        echo "<tr>";
        echo "<td data-label='Épreuve:'>" . htmlspecialchars($row['nom_epreuve'], ENT_QUOTES, 'UTF-8') . "</td>";
        echo "<td data-label='Date:'>" . ($date ? $date->format('d/m/Y') : htmlspecialchars($row['date_epreuve'], ENT_QUOTES, 'UTF-8')) . "</td>";
        echo "<td data-label='Heure:'>" . ($heure ? $heure->format('H:i') : htmlspecialchars($row['heure_epreuve'], ENT_QUOTES, 'UTF-8')) . "</td>";
        echo "<td data-label='Lieu:'>" . htmlspecialchars($row['nom_lieu'], ENT_QUOTES, 'UTF-8') . "</td>";
        echo "<td data-label='Sport:'>" . htmlspecialchars($row['nom_sport'], ENT_QUOTES, 'UTF-8') . "</td>";
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
            <img src="images/Logo_JO_d'été_-_Los_Angeles_2028.svg.png" alt="logo jeux olympiques 2028">
        </figure>
    </footer>

</body>
</html>
