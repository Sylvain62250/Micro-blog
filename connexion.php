<?php
    include('includes/connexion.inc.php');
    include('includes/haut.inc.php');

    /*Hachage du mot de passe*/
    if(isset($_POST['pseudo']) && isset($_POST['mdp'])){
        
      /* Vérification de la connexion */
      $query = 'SELECT id FROM utilisateurs WHERE pseudo = (:pseudo) AND mdp=(:mdp)';
      $prep = $pdo->prepare($query);
      $prep ->bindValue(':pseudo', $_POST['pseudo']);
      $prep ->bindValue(':mdp', $_POST['mdp']);
      $prep->execute();
      $resultat = $prep->fetch();
      $recount = $prep->rowCount();

      if($recount == 0){
        ?><script>alert('Mauvais identifiant ou mot de passe !');</script> <?php
      }else{
        $sid = md5($_POST['pseudo']).time();
        setcookie('Uncookie',$sid, time()+6*60,null, null, false, true);
        $query = "UPDATE utilisateurs SET sid = ? WHERE pseudo=? and mdp=?";
        $prep = $pdo->prepare($query);
        $prep->bindValue(1, $sid);
        $prep->bindValue(2, $_POST['pseudo']);
        $prep->bindValue(3, $_POST['mdp']);
        $prep->execute();
        header('Location: index.php');
      }
    }
?>           

</script>
<div id='boite' class = 'hidden'></div>

<form class="form-horizontal" action="connexion.php" method="POST">
  <div class="form-group">
        <div class="col-sm-offset-4 col-sm-4">
            <input type="input" name='pseudo'class="form-control" id="pseudo" placeholder="Pseudo">
      </div>
  </div>
  <div class="form-group">
        <div class="col-sm-offset-4 col-sm-4"> 
            <input type="password" name='mdp' class="form-control" id="pwd" placeholder="Mot de passe">
      </div>
  </div>
   <div class="form-group"> 
        <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" id="connexion" class="btn btn-success">Connexion</button>
       </div>
    </div>
</form>

<?php include('includes/bas.inc.php'); ?>