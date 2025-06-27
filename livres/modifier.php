<?php

    require_once('../config/db.php');

    $id = $_GET['id'];
    if(!empty($_POST['modify'])){
        $Title = $_POST['Title'];
        $Year = $_POST['Year'];
    
        if(empty($Title) || empty($Year)){
            exit("Tous les champs doit être reiseignés");  //* Termine l'exécution du script
        }

        //* Mettre à jour  ||  Sans WHERE on modif toutes les lignes de la tables / Identification de la ligne
        $stmt = $pdo->prepare('UPDATE livres SET titre=:titre, annee_publication=:annee, nom_auteur=:auteur, nom_genre=:genre WHERE id_livres=:id');

        $stmt->execute(array(
            'titre' => $Title,
            'annee' => $Year,
            'id' => $id
        ));
    }

    //* Récuperer les informations du livres

    $stmt = $pdo->prepare('SELECT titre, annee_publication, nom_auteur, nom_genre FROM livres WHERE id_livre=:id');  //* faire mes jointures

    $stmt->execute(array(
        'id' => $id
    ));

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
</head>
<body>
    
    <form action="#" method="POST">
        <input type="text" name="Title" id="Title">
        <input type="text" name="Year" id="Year">
        <!-- <select name="Authors" id="Authors">
            <option value=""></option>  
        </select>
        <select name="Genre" id="Genre">
            <option value=""></option>  
        </select> -->
        <input type="submit" name="modify" value="Modify">
    </form>
    <br>
    <a href="../livres/liste.php">Tab des livres</a>
</body>
</html>