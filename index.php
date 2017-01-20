<?php
session_start();
include('includes/connexion.inc.php');
include('includes/haut.inc.php');
?>

<div class="row">              
  <form method="post" action='message.php'>
    <div class="col-sm-10">  
      <div class="form-group">
       <?php
       /*Si on a un ID, on récupère la donnée en base*/
        if(isset($_GET['id']) && !empty($_GET['id'])){
        ?>  <input type="hidden" name="id" value="<?=$_GET['id']?>">  
        <?php 
          $query = 'SELECT * FROM messages WHERE id='.$_GET['id'];
          $msgmodif = $pdo->query($query)->fetch();
        //  $msgmodif->fetch();
          }
        ?>
        <?php if($connecte==true){

        ?>
        <textarea id="message" name="message" class="form-control" placeholder="Message"><?php if(isset($_GET['id'])){echo $msgmodif['contenu']; } ?></textarea>
        
      </div>
    </div>
    <div class="col-sm-2">
      <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
      <?php } ?>
    </div>                        
  </form>
</div>


<?php

    $query = 'SELECT * FROM messages ORDER BY id DESC LIMIT 5';
    $stmt = $pdo->query($query);

while ($data = $stmt->fetch()) {
    
   $GLOBALS['b'] = $data['date'];
    
    ?>
    <blockquote>
    <!--Messages envoyés -->
        
        <p><?= getdate($data['date'])['mday'] . '/' . getdate($data['date'])['mon'] . '/' . getdate($data['date'])['year'] ?></p>
        <p id="<?= $data['date'] ?>"><?= $data['contenu'] ?></p>
        
        <span class ="pull-right">
        <?php if($connecte==true){ ?>
          <a href="index.php?id=<?= $data['id'] ?>"><button type="button" class="btn btn-primary">Modifier</button></a>
          <a href="suppression-msg.php?id=<?= $data['id'] ?>"><button type="button" class="btn btn-danger">Supprimer</button></a></span></br>
          <?php  
          }
          ?> 
        </span>
    </blockquote>
    <?php
}
?>


<?php include('includes/bas.inc.php'); ?>