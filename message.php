<?php
	include('includes/connexion.inc.php');

	if($connecte == true){

		if (isset($_POST['id']) && !empty($_POST['id'])) {
            $query = 'UPDATE messages SET contenu=(:contenu), date =UNIX_TIMESTAMP() WHERE id = (:id)';
            $prep = $pdo->prepare($query);
            $prep->execute(array(':contenu' => $_POST['message'], ':id' => $_POST['id']));
		}else {
	
		$query = 'INSERT INTO messages (contenu, date) VALUES (:contenu, UNIX_TIMESTAMP())';
		$prep = $pdo->prepare($query);
		$prep->execute(array(':contenu' => $_POST['message']));
		}
	}
	
/*Redirection vers la page d'accueil*/
	header('Location: index.php');
?>

