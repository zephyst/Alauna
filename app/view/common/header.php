<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php if (isset($css)): ?>
        <link rel="stylesheet" href="public/css/<?=$css?>">
    <?php endif ?>
    <link rel="stylesheet" href="public/css/headerFooter.css">

    <?php if (isset($tampons)) {
        echo '<link rel="stylesheet" href="public/css/tampons.css">';
    }?>

    <link rel="icon" href="public/img/favicon.ico">

    <script src="public/js/menu.js" type="text/javascript" defer></script>

    <?php if (isset($js)){
        echo '<script src="public/js/'.$js.'" type="text/javascript" defer></script>';
    }?>

    <title><?=$page_title?></title>
</head>
<body>
<header>
    <a href="index.php"><img src="public/img/LOGO_ALAUNA.svg" alt="Logo"></a>
    <section>
        <a id="cart" href="panier.php">
            <img src="public/img/valise-panier.svg" alt="Valise du panier">
            <p>Panier</p>
        </a>
        <nav id="nav">
            <ul>
                <li>
                    <a href="index.php">Accueil</a>
                </li>
                <li>
                    <a href="panier.php">Votre panier</a>
                </li>
                <li>
                    <a href="trombi.php">Nos équipes</a>
                </li>
                <li id="biereButton">
                <p>Nos bières</p>
                </li>
                <li class="biereMenu">
                    <a href="biere.php?biere=1">Pampa</a>
                    <a href="biere.php?biere=2">Laponie</a>
                    <a href="biere.php?biere=3">Sahara</a>
                    <a href="biere.php?biere=4">Salinas Grandes</a>
                    <a href="biere.php?biere=5">Nevada</a>
                </li>
                <li>
                    <a href="goodies.php">Nos goodies</a>
                </li>
                <li>
                    <a href="contact.php">Nous contacter</a>
                </li>
                <li>
                    <a href="evenement.php">Nos évènements</a>
                </li>
                <li>
                    <a href="vulgarisation.php">Découvrir la brasserie</a>
                </li>
            </ul>
        </nav>
        <div id="menuButton">
            <img src="public/img/logoMenu.svg" alt="Menu">
            <p>Menu</p>
        </div>
    </section>
</header>
