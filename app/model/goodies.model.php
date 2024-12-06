<?php
function getGoodies($pdo): array
{
    $sql = 'SELECT * FROM goodies';
    // Exécution de la requête SQL via l'objet PDO
    $stmt = $pdo->query($sql);
    // Récupération de tous les résultats de la requête sous forme de tableau associatif
    $goodies = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $goodies;
}
?>