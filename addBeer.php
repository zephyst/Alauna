<?php
session_start();
if (!isset($_SESSION['panier']['biere'])) {
    $_SESSION['panier']['biere'] = [];
}

if (ctype_digit($_POST['idBiere']) && $_POST['idBiere'] > 0 && $_POST['idBiere'] < 6){
    $set = false;
    foreach ($_SESSION['panier']['biere'] as $id => $quant) {
        if ($id == $_POST['idBiere']) {
            $_SESSION['panier']['biere'][$id] += $_POST['quantity'];
            $set = true;
        }
    }
    if (!$set){
        $_SESSION['panier']['biere'] += [
            $_POST['idBiere'] => $_POST['quantity']
        ];
    }
    header('location:biere.php?biere='.$_POST['idBiere']);
}else {
    $_SESSION['erreur'] = "Ne modifiez pas ce champ svp";
    header('location:biere.php?biere=1');
}




