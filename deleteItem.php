<?php
session_start();
if ($_POST['type']=='biere') {
    unset($_SESSION['panier']['biere'][$_POST['deleteId']]);
} else {
    unset($_SESSION['panier']['goodies'][$_POST['deleteId']]);
}

header('location:panier.php');