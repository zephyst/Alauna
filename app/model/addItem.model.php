<?php
function getSpecificBeers(PDO $pdo, $ids) {
    $list = join(",", $ids);

    $sql  = "SELECT * FROM biere WHERE ID_biere IN (" . $list . ")";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll();
}

function getSpecificGoodies(PDO $pdo, $ids) {
    $list = join(",", $ids);

    $sql  = "SELECT * FROM goodies WHERE photo IN (" . $list . ")";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll();
}