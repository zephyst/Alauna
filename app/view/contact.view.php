<main>

<div class="titre" >
    <h1>
        Contactez nous !
    </h1>
</div>

<form class="formulaire" action ="contact.php" method="post">
    <div class="lettre">

        <div class="nom">
            <label for="nom">Nom :</label>
            <textarea type="text" class="input-textarea" id="nom" name="nom" required> </textarea>
        </div>
        

        <div class="prenom">
            <label for="nom">Prénom :</label>
            <textarea type="text" class="input-textarea" id="prenom" name="prenom" required></textarea>
        </div>

        <div class="email">
            <label for="mail">Email :</label>
            <textarea type="mail" class="input-textarea" id="mail" name="mail" required></textarea>
        </div>
        
        <div class="tel">
            <label for="nom">Téléphone :</label>
            <textarea type="phone" class="input-textarea" id="telephone" name="telephone" ></textarea>

        </div>
        
        <div class="message">
            <label for="nom">Message :</label>
            <textarea type="text" class="input-textarea" id="message" name="mess" ></textarea>
        </div>
        


                    

        
     </div>
     <div class="timbre">
            <img src="public/img/timbrePampa.svg" alt="timbre de la pampa">

           </div>

    <div class="envoyer">
         <button  name="envoyer" action="" type="submit" method="post" class="bouton">Envoyer</button>
    </div>

</form>

<div class="titre">
    <h2>Nous vous recontacterons dans les plus brefs délais ...</h2>


</div>

<section class="visite">
    <div id="tampon">
        <img src="public/img/favicon.ico" alt="tampon brasserie">
    </div>

    <div class="info">
        <h4>BRASSERIE ALAUNA</h4>
        <p>
            <br>240 rue de la Motte</br>
            77550 Moissy-Cramayel
            <br>01.64.13.44.88
        </p>
    </div>

</section>

</main>