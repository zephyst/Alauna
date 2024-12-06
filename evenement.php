<?php
session_start();
if (isset($_SESSION['erreur'])) {
    $message = $_SESSION['erreur'];
    unset($_SESSION['erreur']);
    echo "<script type='text/javascript'>alert('$message');</script>";
}

$page_title = 'evenement';
$css = 'evenement.css';
$tampons=true;


ob_start();
include 'app/view/evenement.view.php';

require_once "app/model/connexionBDD.php";
$pdo = getDatabaseConnection();


$content = ob_get_clean();

include 'app/view/common/layout.php';