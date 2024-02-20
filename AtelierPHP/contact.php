<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations de Contact</title>
    <style>
        table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h2>Informations de Contact</h2>
    <?php
    // Vérification si des données sont envoyées via GET
    if (isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['email']) && isset($_GET['telephone']) && isset($_GET['code_postal'])) {
        // Récupération des données envoyées via GET
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
        $email = $_GET['email'];
		$telephone = $_GET['telephone'];
		$code_postal = $_GET['code_postal'];
        
        // Affichage des informations dans un tableau
        echo "<table>";
        echo "<tr><th>Nom</th><th>Prénom</th><th>Email</th><th>Téléphone</th><th>code postal</th></tr>";
        echo "<tr><td>$nom</td><td>$prenom</td><td>$email</td><td>$telephone</td><td>$code_postal</td></tr>";
        echo "</table>";
    } else {
        echo "<p>Aucune donnée reçue.</p>";
    }
    ?>
</body>
</html>
