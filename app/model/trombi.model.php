
<?php

// Fonction pour récupérer les membres de l'équipe brasserie
function getEquipeBrasserie(PDO $pdo)
{
    $sql_brasserie = "SELECT * FROM equipe_brasserie";
    $stmt = $pdo->query($sql_brasserie);
    $membres_brasserie =  $stmt->fetchAll();

    return $membres_brasserie;
}


// Fonction pour récupérer les membres de l'équipe communication
function getEquipeCom(PDO $pdo)
{
    $sql_com = "SELECT * FROM equipe_com";
    $stmt = $pdo->query($sql_com);
    $membres_com =  $stmt->fetchAll();
    return $membres_com;
}


