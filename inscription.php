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

?>

<form class="form-horizontal" id="form" action="inscription.php" method="POST">
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-4">
            <input type="input" name='name'class="form-control" id="name" placeholder="Nom">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-4">
            <input type="input" name='username'class="form-control" id="username" placeholder="Prénom">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-4">
            <input type="input" name='pseudo'class="form-control" id="pseudo" placeholder="Pseudo">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-4">
            <input type="input" name='mail'class="form-control" id="mail" placeholder="Mail">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-4"> 
            <input type="password" name='mdp' class="form-control" id="pwd" placeholder="Mot de passe">
        </div>
    </div>
    <div class="form-group"> 
        <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" id="inscription" class="btn btn-success">S'inscrire</button>
       </div>
    </div>
</form>
<?php include('includes/bas.inc.php'); ?>
