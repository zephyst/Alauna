<?php

// function getDatabaseConnection()
{
    $dsn = 'mysql:dbname=cdce5547_2024_alauna;host=localhost;charset=utf8';
    $username = 'cdce5547_2024_S2_admin';
    $password = 'MMI4ever@senart';


    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
    catch (PDOException $e) {
        echo "il y a eu un problème avec la connexion à la base de données.";
        die();
    }

    return $pdo;
}
