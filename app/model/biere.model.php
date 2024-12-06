<?php

function getInfoBiere(int $IDbiere, PDO $pdo){
    $sql = "SELECT * FROM biere WHERE ID_biere=:IDbiere";
    $stmt= $pdo->prepare($sql);
    $stmt->bindParam(':IDbiere', $IDbiere, PDO::PARAM_INT);
    $stmt->execute();
    if (!$infoBiere = $stmt->fetch()){
        $_SESSION['erreur'] = "Cette page n'est pas disponible.";
        header('Location: index.php');
        exit;
    }
    return $infoBiere;
}