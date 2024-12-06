<?php
$page_title = 'Vulgarisation';
$css = 'style.css';
$tampons=true;

ob_start();
include 'app/view/vulgarisation.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';