<?php

function getDatabaseConnection()
{
    $dsn = 'mysql:dbname=sae_biere_alauna;host=localhost;charset=utf8';
    $username = 'root';
    $password = '';

    // $username = 'utilisateur';
    // $password = 't3m7g20f24l25';

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
    catch (PDOException $e) {
        $_SESSION['erreur'] = "Un problème est survenu.";
        exit;
    }
    return $pdo;
}
