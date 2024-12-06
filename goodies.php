<?php
session_start();
if (isset($_SESSION['erreur'])) {
    $message = $_SESSION['erreur'];
    unset($_SESSION['erreur']);
    echo "<script type='text/javascript'>alert('$message');</script>";
}

require_once 'app/model/goodies.model.php';
require_once 'app/model/connexionBDD.php';
$page_title = 'Goodies';
$js = 'goodies.js';
$css = 'goodies.css';
$pdo = getDatabaseConnection();

$goodies = getGoodies($pdo);


ob_start();
include 'app/view/goodies.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';