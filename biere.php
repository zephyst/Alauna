<?php
session_start();
if (isset($_SESSION['erreur'])) {
    $message = $_SESSION['erreur'];
    unset($_SESSION['erreur']);
    echo "<script type='text/javascript'>alert('$message');</script>";
}


if(empty($_GET['biere']) || !ctype_digit($_GET['biere'])){
    $_SESSION['erreur'] = "Cette page n'existe pas.";
    header('Location: index.php');
    exit;
}

$IDbiere = $_GET['biere'];
require_once "app/model/connexionBDD.php";
require_once "app/model/biere.model.php";
$pdo = getDatabaseConnection();
$biere = getInfoBiere($IDbiere, $pdo);

$page_title = 'Bière '.$biere['Nom_biere'];
$css = 'biere.css';
$js = 'biere.js';

ob_start();
include 'app/view/biere.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';