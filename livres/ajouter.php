<?php

    require_once('../config/db.php');

    if(!empty($_POST['register'])){
        $Title = $_POST['Title'];
        $Year = $_POST['Year'];
        $Authors = $_POST['Authors'];
        $Gender = $_POST['Gender'];

        //* Permet de tester si mes variables sont vide 

        if(empty($Title) || empty($Year) || empty($Author) || empty($Gender)){
            exit("Tous les champs doit être reiseignés");  //* Termine l'exécution du script
        }

        $stmt = $pdo->prepare('INSERT INTO livres(titre, annee_publication, fk_id_auteur, fk_id_genre) VALUES(:Title, :Annee, :Authors, :Gender)');

        $stmt->execute(array(
            'Title'   => $Title,
            'Annee'   => $Year,
            'Authors' => $Authors,
            'Gender'  => $Gender
        )); 
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Ajouts d'un livres</title>
</head>
<body>
    <br>
    <form action="#" method="POST">
        <input type="text" name="Title" id="Title" placeholder="Title" require>
        <input type="text" name="Year" id="Year" placeholder="Year" require>
        <select name="Authors" id="Authors">

            <?php

                require_once('../config/db.php');

                $stmt = $pdo->prepare('SELECT  nom_auteur as auteur, id_auteur
                                        FROM auteurs');
                
                $stmt->execute();
                $Authors = $stmt->fetchAll();
                foreach($Authors as $Author):

            ?>
            <option value="<?=$Author['id_auteur'] ?>"><?=$Author['auteur'] ?></option>  

            <?php
                endforeach;
            ?>

        </select>
        <select name="Gender" id="Gender">

            <?php

                require_once('../config/db.php');

                $stmt = $pdo->prepare('SELECT nom_genre  as genre, id_genre
                                        FROM genres');
                
                $stmt->execute();
                $Genders = $stmt->fetchAll();
                foreach($Genders as $Gender):

            ?>
  
            <option value="<?=$Gender['id_genre'] ?>"><?=$Gender['genre'] ?></option>

            <?php
                endforeach;
            ?>

        </select>
        <input type="submit" name="register" value="Add">
    </form>
    <br>
    <a id="AddOfBook" href="../livres/liste.php">Tab des livres</a>
    
</body>
</html>

