<main>
    <h2>Votre Panier</h2>
    <section id="article">
        <ul class="labels">
            <li>Produits</li>
            <li>Quantité</li>
            <li>Prix</li>
        </ul>
        <?php if (isset($bieres)) : ?>
            <?php foreach ($panier['biere'] as $id => $quantity):?>
                <?php foreach ($bieres as $biere):?>
                    <?php if ($biere['ID_biere'] == $id):?>
                        <div class="biere">
                            <img class="articleTitle" src="public/img/bieres/biere-<?= $biere['ID_biere'] ?>.png" alt="image de bière de <?= $biere['Nom_biere'] ?>">
                            <h4 class="articleTitle" > Bière <?= $biere['Nom_biere'] ?></h4>
                            <p><?= $quantity ?></p>
                            <p><?= $biere['Prix'] * $quantity ?>€</p>
                            <form action="deleteItem.php" method="post">
                                <input type="text" name="type" value="biere" style="display: none" readonly>
                                <input type="text" name="deleteId" value="<?= $biere['ID_biere'] ?>" style="display: none" readonly>
                                <button type="submit" class="delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    <?php endif?>
                <?php endforeach ?>
            <?php endforeach ?>
        <?php endif?>
        <?php if (isset($goodies)) : ?>
            <?php foreach ($panier['goodies'] as $id => $quantity):?>
                <?php foreach ($goodies as $goodie):?>
                    <?php if ($goodie['photo'] == $id):?>
                        <div class="goodie">
                            <img class="articleTitle" src="public/img/goodies/goodies<?= $goodie['photo']?>.svg" alt="image de bière de <?= $goodie['Nom'] ?>">
                            <h4 class="articleTitle"> <?= $goodie['Nom'] ?></h4>
                            <p><?= $quantity ?></p>
                            <p><?= $goodie['Prix'] * $quantity ?>€</p>
                            <form action="deleteItem.php" method="post">
                                <input type="text" name="deleteId" value="<?= $goodie['photo'] ?>" style="display: none" readonly>
                                <input type="text" name="type" value="goodie" style="display: none" readonly>
                                <button type="submit" class="delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    <?php endif?>
                <?php endforeach ?>
            <?php endforeach ?>
        <?php endif ?>
        <div id="total">
            <h3>Total : <?= $totalPanier ?>€</h3>
        </div>
    </section>
</main>