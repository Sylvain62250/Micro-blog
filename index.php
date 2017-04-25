<?php
    session_start();
    include('includes/connexion.inc.php');
    include('includes/haut.inc.php');
    $index = new Smarty();
?>

<div class="row">              
    <form method="post" action='message.php'>
        <div class="col-sm-10">  
            <div class="form-group">
                <?php
                    /*Si on a un ID, on récupère la donnée en base*/
                    if(isset($_GET['id']) && !empty($_GET['id'])){
                ?>  
                
                <input type="hidden" name="id" value="<?=$_GET['id']?>">  
                <?php 
                    $query = 'SELECT * FROM messages WHERE id='.$_GET['id'];
                    $msgmodif = $pdo->query($query)->fetch();
       
                    }
                ?>
                <?php if($connecte==true){ ?>
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
    
?>

<?php
}
?>
            <?php
                $messagesParPage=5;
                $retour_total='SELECT COUNT(*) AS total FROM messages';
                $prep=$pdo->prepare($retour_total);
                $prep->execute();
                $donnees_total=$prep->fetch();
                $total=$donnees_total['total']; 
                $nombreDePages=ceil($total/$messagesParPage);

                if(isset($_GET['page'])){
                    $pageActuelle=intval($_GET['page']);
                    if($pageActuelle>$nombreDePages){
                        $pageActuelle=$nombreDePages;
                    }
                    }
                    else {
                        $pageActuelle=1;   
                    }

                    $lecturePremiereDonnee = ($pageActuelle-1)*$messagesParPage;


                    $retour_messages='SELECT * FROM messages ORDER BY id DESC LIMIT '.$lecturePremiereDonnee.', ' . $messagesParPage . '';
                    $prep=$pdo->prepare($retour_messages);
                    $prep->execute();

            while ($data = $prep->fetch()) {
     
      ?>
        <!-- Génération des messages par page. Seul 5 messages seront affichés par page -->
        <blockquote>
            </br>
            <!-- On génère les différents items à afficher avec les boutons suppression et modification -->
            <p><?= getdate($data['date'])['mday'] . '/' . getdate($data['date'])['mon'] . '/' . getdate($data['date'])['year'] . ' par ' . $data['user_id'] . ' : ' ?></p>
            <p id="<?= $data['date'] ?>"><?= $data['contenu'] ?></p>

            <span class ="pull-right">
                <?php 
                    if($connecte==true){ ?>
                        <a href="index.php?id=<?= $data['id'] ?>"><button type="button" class="btn btn-success">Voter</button></a>
                        <a href="index.php?id=<?= $data['id'] ?>"><button type="button" class="btn btn-primary">Modifier</button></a>
                        <a href="suppression.php?id=<?= $data['id'] ?>"><button type="button" class="btn btn-danger">Supprimer</button></a></span></br>
                <?php  
                    }
                ?> 
            </span>
        </blockquote>
          

      <?php
  }

        /** Génération dynamique des numéros de page **/
        echo '<ul class="pagination">';
        echo '<li><a href="#">Précédent</a></li>';
                    for($i=1; $i<=$nombreDePages; $i++){
                        if($i==$pageActuelle){
                            echo '<li><a href="#">'.$i.'</a></li>'; 
                        } else {
                            echo '<li><a href="index.php?page='.$i.'">'.$i.'</a></li>';
                        }
                    }           

            ?>
        <li><a href="#">Suivant</a></li>
    </ul>  
<?php include('includes/bas.inc.php'); ?>