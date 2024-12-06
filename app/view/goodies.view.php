<main>
<?php
 // Boucle à travers chaque élément du tableau $goodies
 foreach ($goodies as $aGoodie) : ?>

        <section class="goodie">
            <h1><?= $aGoodie['Nom'] ?></h1>
           
            <img src="public/img/goodies/goodies<?= $aGoodie['photo']?>.svg" alt="goodies<?= $aGoodie['photo'] ?>">
            <h2><?= $aGoodie['Prix'] ?>€</h2>
            <p><?= $aGoodie['Description'] ?></p>

            <form action="addGoodie.php" method="post">
                <div id="button-container">
                    <button type="button" id="minus-<?=$aGoodie['photo']?>" onclick="setQuantity(-1,<?= $aGoodie['photo'] ?>)" disabled="true"> - </button>
                    <input class="input-<?=$aGoodie['photo']?>" id="quantity" name="quantity" type="text" value="1" readonly>
                    <button type="button" id="plus" onclick="setQuantity(1,<?= $aGoodie['photo'] ?>)"> + </button>
                </div>
                <input id="idGoodie" name="idGoodie" type="hidden" value="<?= $aGoodie['photo'] ?>">
                <button type="submit" class="bouton">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                    </svg>
                    <h3>AJOUTER AU PANIER</h3>
                </button>
            </form>
        </section>

<?php endforeach ?>
</main>