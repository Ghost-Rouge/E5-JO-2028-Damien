<?php
// lister_resultats.php
include 'db.php';  // Inclusion du fichier de connexion à la base de données
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css-pour-utilisateur/lister_resultats.css"> 
    <title>Résultats des Épreuves</title>
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
    <h1>Résultats des épreuves</h1>

    <!-- Tableau pour afficher la liste des résultats -->
    <table>
        <thead>
            <tr>
                <th>Épreuve</th>
                <th>Athlète</th>
                <th>Genre</th>
                <th>Pays</th>
                <th>Résultat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Requête pour récupérer les résultats des épreuves avec les athlètes, pays et genres associés
            $sql = "SELECT e.nom_epreuve, a.nom_athlete, g.nom_genre, p.nom_pays, pa.resultat
                    FROM PARTICIPER pa
                    JOIN EPREUVE e ON pa.id_epreuve = e.id_epreuve
                    JOIN ATHLETE a ON pa.id_athlete = a.id_athlete
                    JOIN PAYS p ON a.id_pays = p.id_pays
                    JOIN GENRE g ON a.id_genre = g.id_genre";
            $stmt = $pdo->query($sql);

            // Boucle pour afficher chaque résultat dans une ligne du tableau
            while ($row = $stmt->fetch()) {
                echo "<tr>";
                echo "<td data-label='Épreuve:'>" . $row['nom_epreuve'] . "</td>";
                echo "<td data-label='Athlète:'>" . $row['nom_athlete'] . "</td>";
                echo "<td data-label='Genre:'>" . $row['nom_genre'] . "</td>";
                echo "<td data-label='Pays:'>" . $row['nom_pays'] . "</td>";
                echo "<td data-label='Résultat:'>" . $row['resultat'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <<p class="paragraph-link">
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
