<main>


    <h1>L'équipe de communication :</h1>

    <div id="equipecom">
        <?php foreach ($membres_com as $aMembre) : ?>

            <div class="carte">
                <a href="#" class="open-popup" data-prenom="<?= $aMembre['prenom'] ?>" data-role="<?= $aMembre['role'] ?>" data-description="<?= $aMembre['description'] ?>" data-photo="public/img/team/pola<?= $aMembre['prenom'] ?>.png">
                    <p class="role"><?= $aMembre['role'] ?></p>
                    <figure class="photo">
                        <img src="public/img/team/pola<?= $aMembre['prenom'] ?>.png" alt="photo de <?= $aMembre['prenom'] ?>">
                    </figure>
                </a>
            </div>
        <?php endforeach ?>
    </div>


    <h1>L'équipe de brassage :</h1>

    <div id="equipebrasserie">
        <?php foreach ($membres_brasserie as $aMembre) : ?>
            <div class="carte">

                <a href="#" class="open-popup" data-prenom="<?= $aMembre['prenom'] ?>" data-role="<?= $aMembre['role'] ?>" data-description="<?= $aMembre['description']?>" data-photo="public/img/team/pola<?= $aMembre['prenom'] ?>.png">
                    <p class="role"><?= $aMembre['role'] ?></p>
                    <figure class="photo">
                        <img src="public/img/team/pola<?= $aMembre['prenom'] ?>.png" alt="photo de <?= $aMembre['prenom'] ?>">
                    </figure>
                </a>
            </div>
        <?php endforeach ?>
    </div>

    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close">&times;</span>
            <h2 id="popup-prenom"></h2>
            <h3 id="popup-role"></h3>
            <p id="popup-description"></p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script> $('#popup').hide();</script>    
    <script src="script.js"></script>



</main>