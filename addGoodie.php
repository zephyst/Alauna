<?php
session_start();
if (!isset($_SESSION['panier']['goodies'])) {
    $_SESSION['panier']['goodies'] = [];
}


$set = false;
foreach ($_SESSION['panier']['goodies'] as $id => $quant) {
    if ($id == $_POST['idGoodie']) {
        $_SESSION['panier']['goodies'][$id] += $_POST['quantity'];
        $set = true;
    }
}

if (!$set){
    $_SESSION['panier']['goodies'] += [
        $_POST['idGoodie'] => $_POST['quantity']
    ];
}

header('location:goodies.php');
