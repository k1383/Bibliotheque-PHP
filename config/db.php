<?php
    // user : bibli25
    // mdp : 1234

    //* Manipuler une base de donnée > PDO
    //* Connexion à la bbd

    $host = 'localhost';
    $dbname = 'bibliothèque';  //* nom de la base de données
    $username = 'bibli25';  //* nom d'utilisateur MySQL
    $password = '1234';  //* Mot de passe 

    //*Try-catch pour gérer les erreurs

    try {
        // création de la connexion PDO
        $pdo = new PDO(
            "mysql:host=$host;dbname=$dbname;charset=utf8",
            $username, 
            $password,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]  //* definir le mode des gestion des erreuers => qu'on va utiliser exeption
        );
    } catch(PDOException $e){
        die("Erreur de connexion : ".$e->getMessage());
    }
?>