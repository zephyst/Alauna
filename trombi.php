<?php
$page_title = 'Notre équipe';
$css = 'trombi.css';
$js = 'trombi.js';
$tampons=true;

require_once "app/model/connexionBDD.php";
require_once "app/model/trombi.model.php";
$pdo = getDatabaseConnection();


// Récupérer les données des équipes
$membres_brasserie = getEquipeBrasserie($pdo);
$membres_com = getEquipeCom($pdo);


// Fusionner les résultats dans un tableau unique
// $membre = array_merge($membres_brasserie, $membres_com);







ob_start();
include 'app/view/trombi.view.php';

$content = ob_get_clean();

include 'app/view/common/layout.php';