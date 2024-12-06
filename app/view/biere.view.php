<main>
    <div id="imgbeer">
        <img id="biere" src="public/img/bieres/biere-<?= $biere['ID_biere'] ?>.png" alt="image de bière de <?= $biere['Nom_biere'] ?>">
        <h2><?= $biere['Nom_biere'] ?></h2>
        <a href="#infos"><img id="chevron" src="public/img/chevrons/chevron-down.svg" alt=""></a>
    </div>
    <section id="infos">
        <div id="descr">
            <img src="public/img/timbres/timbre-<?= $biere['ID_biere']?>.svg" alt="timbre de <?= $biere['Nom_biere']?>">
            <p><?= $biere['Description'] ?></p>
            <ul id="nb">
                <li><?= $biere['Volume'] ?> cl</li>
                <li><?= $biere['Taux'] ?>% VOL</li>
            </ul>
        </div>
        <div id="panier">
            <h2>Ajouter au panier</h2>
            <form action="addBeer.php" method="post">
                <div>
                    <button class="quant" type="button" id="minus" onclick="setQuantity(-1)" disabled="true"> - </button>
                    <input id="quantity" name="quantity" type="text" value="1" readonly>
                    <input name="idBiere" type="hidden" value="<?= $_GET['biere'] ?>" readonly style="display: none">
                    <button class="quant" type="button" id="plus" onclick="setQuantity(1)"> + </button>
                </div>
                <button id="submit" type="submit">Ajouter</button>
            </form>
        </div>
    </section>
</main>

<style>
    body{
        background-image: url('public/img/fonds/<?= $biere['ID_biere'] ?>fond.svg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position:top;
    }
</style>