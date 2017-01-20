<?php
include('includes/connexion.inc.php');
include('includes/haut.inc.php');
?>

<div class="row">              
  <form method="post" action='message.php'>
    <div class="col-sm-10">  
      <div class="form-group">
       <?php
  
        if(isset($_GET['id']) && !empty($_GET['id'])){
        ?>  <input type="hidden" name="id" value="<?=$_GET['id']?>">  
        <?php 
          $query = 'SELECT * FROM messages WHERE id='.$_GET['id'];
          $msgmodif = $pdo->query($query)->fetch();
      
          }
        ?>
        <textarea id="message" name="message" class="form-control" placeholder="Message"><?php if(isset($_GET['id'])){echo $msgmodif['contenu']; } ?></textarea>
      </div>
    </div>
    <div class="col-sm-2">
      <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
    </div>                        
  </form>
</div>


<?php
$query = 'SELECT * FROM messages ORDER BY id DESC';
$stmt = $pdo->query($query);

while ($data = $stmt->fetch()) {
    ?>
    <blockquote>
   
        
        <p><?= getdate($data['date'])['mday'] . '/' . getdate($data['date'])['mon'] . '/' . getdate($data['date'])['year']?></p>
        
        <?= $data['contenu'] ?>
        <span class ="pull-right">
          <a href="index.php?id=<?= $data['id'] ?>"><button type="button" class="btn btn-primary">Modifier</button></a>
          <a href="suppression-msg.php?id=<?= $data['id'] ?>"><button type="button" class="btn btn-danger">Supprimer</button></a>
        </span>
    </blockquote>
    <?php
}
?>


<?php include('includes/bas.inc.php'); ?>

UNIX_TIMESTAMP lors de l'ajout ou de la modification d'une date