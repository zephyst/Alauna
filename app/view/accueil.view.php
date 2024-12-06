<main>
    <div class="image-container">
        <div class="image-wrapper">
            <div id="nevada" class="carrouselItem">
                <a href="biere.php?biere=5" class="biere">
                    <img src="public/img/bieres/biere-5.png" alt="bière Nevada">
                    <p>Nevada</p>
                </a>
            </div>
            <div id="sahara" class="carrouselItem">
                <a href="biere.php?biere=3" class="biere">
                    <img src="public/img/bieres/biere-3.png" alt="bière Sahara">
                    <p>Sahara</p>
                </a>
            </div>
            <div id="pampa" class="carrouselItem">
                <a href="biere.php?biere=1" class="biere">
                    <img src="public/img/bieres/biere-1.png" alt="bière Pampa">
                    <p>Pampa</p>
                </a>
            </div>
            <div id="salinas" class="carrouselItem">
                <a href="biere.php?biere=4" class="biere">
                    <img src="public/img/bieres/biere-4.png" alt="bière Salinas Grandes">
                    <p>Salinas Grandes</p>
                </a>
            </div>
            <div id="laponie" class="carrouselItem">
                <a href="biere.php?biere=2" class="biere">
                    <img src="public/img/bieres/biere-2.png" alt="bière Laponie">
                    <p>Laponie</p>
                </a>
            </div>
        </div>


        <a class="prev">
            <img src="public/img/chevrons/chevron-left.svg" onclick="scrolling(-1)" alt="Bière précédente">
        </a>
        <a class="next">
            <img src="public/img/chevrons/chevron-right.svg" onclick="scrolling(1)" alt="Bière suivante">
        </a>
    </div>
 
</main> 

<div id="popup" class="popup">
    <div class="popup-content">
        <h2>Confirmation d'âge</h2>
        <p>Veuillez certifier que vous avez 18 ans ou plus pour accéder à ce site.</p>
        <button onclick="closePopup()">Je certifie</button>
    </div>
</div>

  <script>
    function closePopup() {
        const popup = document.getElementById('popup');
        popup.style.display = 'none';
    }

    window.onload = function() {
        const popup = document.getElementById('popup');
        popup.style.display = 'block'; // Affiche la fenêtre pop-up
    }
</script>