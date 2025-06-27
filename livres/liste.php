<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="table_component" role="region" tabindex="0">
        <table> <!-- Ouverture du tab -->
            <caption></caption>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Année</th>
                    <th>Nom auteur</th>
                    <th>Genre</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
</body>
</html>

<?php

    require_once('../config/db.php');

    //* On récupérer tous nos éléments 
    $stmt = $pdo->prepare('SELECT id_livre, titre, annee_publication as annee, nom_auteur as auteur, nom_genre as genre 
                            FROM livres l 
                            LEFT JOIN auteurs a ON l.fk_id_auteur=a.id_auteur
                            LEFT JOIN genres  g ON g.id_genre=l.fk_id_genre');
    $stmt->execute();
    $books = $stmt->fetchAll();

   foreach($books as $book): 
?>

                <tr>
                    <td><?=$book['titre'] ?></td>
                    <td><?=$book['annee'] ?></td>
                    <td><?=$book['auteur'] ?></td>
                    <td><?=$book['genre'] ?></td>
                    <td><a id="Modify" href="../livres/modifier.php?id=<?=$book['id_livre']?>">Modifier</a> | <a id="Add" href="../livres/supprimer.php?id=<?=$book['id_livre']?>">Supprimer</a></td>
                </tr>
<?php
    endforeach;
?>
            </tbody>
        </table> <!-- Fermeture du tab -->
    </div>   
    <a href="../livres/ajouter.php">Ajouter un livre</a>