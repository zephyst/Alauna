<?php
session_start();
if (isset($_SESSION['erreur'])) {
    $message = $_SESSION['erreur'];
    unset($_SESSION['erreur']);
    echo "<script type='text/javascript'>alert('$message');</script>";
}

$page_title = 'Contact';
$css = 'contact.css';
$tampons=true;


ob_start();
include 'app/view/contact.view.php';

require_once "app/model/connexionBDD.php";
require_once "app/model/contact.model.php";
$pdo = getDatabaseConnection();


$content = ob_get_clean();

include 'app/view/common/layout.php';