<?php
// db.php

$host = 'sql112.infinityfree.com';
$dbname = 'if0_38480204_bdd_php_jo_2028_d';
$username = 'if0_38480204';
$password = 'K3Xt68GVxG9q';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Configurer PDO pour afficher les erreurs
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
