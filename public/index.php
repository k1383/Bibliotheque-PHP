<?php

    //* On récupére nos éléments de db.php
    require_once('../config/db.php');  

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>Bibliothèque</title>
</head>
<body>
    <header id="index">
        <h1>Bibliothèque</h1>
        <nav>
            <ul>
                <li><a href="../livres/liste.php">Livres</a></li>
                <li><a href="../auteurs/liste.php">Auteurs</a></li>
                <li><a href="../membres/liste.php">Membres</a></li>
                <li><a href="../emprunts/liste.php">Emprunts</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>