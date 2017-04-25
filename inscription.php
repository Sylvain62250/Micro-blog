<?php
    include('includes/connexion.inc.php');
    include('includes/haut.inc.php');


    if(isset($_POST['mail']) && isset($_POST['mdp']) && isset($_POST['pseudo']) && isset($_POST['name']) && isset($_POST['username'])){
        
        var_dump($_POST);
        
        /** On vérifie qu'un utilisateur n'existe pas déjà avec le pseudo ou le mail **/
        $verif = "SELECT * FROM utilisateurs WHERE pseudo = (:pseudo) OR email = (:mail)";
        $prep = $pdo -> prepare($verif);
        $prep->bindValue(':pseudo', $_POST['pseudo']);
        $prep->bindValue(':mail', $_POST['mail']);
        $prep->execute();
        $verification = $prep->fetch();
        $rowcount = $prep->rowCount();

        /** Si aucun utilisateur ne possède un mail ou un pseudo existant, on l'insère en bdd **/
        if($rowcount == 0){
          $query = "INSERT INTO utilisateurs (nom, prenom, pseudo, email, mdp) VALUES (:nom, :prenom, :pseudo, :mail, :mdp)";
          $prep = $pdo->prepare($query);
          $prep ->bindValue(':nom', $_POST['name']);
          $prep ->bindValue(':prenom', $_POST['username']);
          $prep -> bindValue(':pseudo', $_POST['pseudo']);
          $prep ->bindValue(':mail', $_POST['mail']);
          $prep ->bindValue(':mdp', $_POST['mdp']);
          $prep->execute();
          header('Location: index.php');
        }
    }
include('includes/formulaire_inscription.inc.php');
include('includes/bas.inc.php');
?>
