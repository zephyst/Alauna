<?php
require_once "app/model/connexionBDD.php";
$pdo = getDatabaseConnection();


        if(isset($_POST["envoyer"])){
            $nom= $_POST["nom"];
            $prenom= $_POST["prenom"];
            $mail= $_POST["mail"];
            $telephone= $_POST["telephone"];
            $mess= $_POST["mess"];
        
            if(!empty($nom) && !empty($prenom) && !empty($mail) && !empty($telephone) && !empty($mess)){
        
                $sql = "INSERT INTO contact (`nom`, `prenom`, `mail`, `telephone`, `message`) VALUES (:nom, :prenom, :mail, :telephone, :mess)" ;
                $stmt = $pdo->prepare($sql);
        
                $stmt->bindParam(':nom',$nom);
                $stmt->bindParam(':prenom',$prenom);
                $stmt->bindParam(':mail',$mail);
                $stmt->bindParam(':telephone',$telephone);
                $stmt->bindParam(':mess',$mess);
        
                $result = $stmt->execute();
                
        
                if(!$result){
                    echo "<script type=\"text/javascript\"> alert('Un problème est survenu, l'enregistrement n'a pas été
                    effectué!.')</script>";
                    }
                    else{
                    echo "
                    <script type=\"text/javascript\"> alert('Votre message a bien été envoyé.')</script>";
                    }
                    
                    return $result;
        
            }else{
                echo "Tous les champs sont requis!";
            }
        
        }
    