<?php
session_start();
if (isset($_SESSION['erreur'])) {
    $message = $_SESSION['erreur'];
    unset($_SESSION['erreur']);
    echo "<script type='text/javascript'>alert('$message');</script>";
}
$page_title = 'Panier';
$css = 'panier.css';
$tampons = true;

require_once 'app/model/connexionBDD.php';
require_once 'app/model/addItem.model.php';
$pdo = getDatabaseConnection();

if (isset($_SESSION['panier']) || $_SESSION['panier'] == null ){
    $panier = $_SESSION['panier'];
    $totalPanier = 0;

    if (isset($panier['biere']) && $panier['biere'] != null) {
        $bieres = getSpecificBeers($pdo, array_keys($_SESSION['panier']['biere']));

        foreach ($panier['biere'] as $id => $quantity) {
            foreach ($bieres as $biere) {
                if ($biere['ID_biere'] == $id) {
                    $totalPanier += $biere['Prix']*$quantity;
                }
            }
        }
    }
    if (isset($panier['goodies']) && $panier['goodies'] != null) {
        $goodies = getSpecificGoodies($pdo, array_keys($_SESSION['panier']['goodies']));

        foreach ($panier['goodies'] as $id => $quantity) {
            foreach ($goodies as $goodie) {
                if ($goodie['photo'] == $id) {
                    $totalPanier += $goodie['Prix']*$quantity;
                }
            }
        }
    }
    ob_start();
    include 'app/view/panier.view.php';
    $content = ob_get_clean();

    include 'app/view/common/layout.php';
} else {
    $_SESSION['erreur'] = 'Votre panier est vide !';
    header('location:index.php');
}



