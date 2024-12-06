<?php
session_start();
if (isset($_SESSION['erreur'])) {
    $message = $_SESSION['erreur'];
    unset($_SESSION['erreur']);
    echo "<script type='text/javascript'>alert('$message');</script>";
}

$page_title = 'Accueil';
$css = 'accueil.css';
$js = 'accueil.js';

ob_start();
include 'app/view/accueil.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';