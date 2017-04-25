<div id='boite' class = 'hidden'></div>

<form class="form-horizontal" id="form" action="connexion.php" method="POST">
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
        <div class="col-sm-offset-4 col-sm-1">
            <button type="submit" id="connexion" class="btn btn-success">Connexion</button>
       </div>
       <div class="col-sm-1">
           <button type="button" onclick="location.href='inscription.php'" id="inscription" class="btn btn-success">Inscription</button>
       </div>
    </div>
</form>

