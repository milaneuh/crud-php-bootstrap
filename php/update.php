<?php 
include "config.php";

if (isset($_GET['id'])) {
	
	$id = validate($_GET['id']);

	$sql = $pdo->prepare("SELECT * FROM users WHERE user_id=?");
    $sql->execute(array($id));
    $count = $sql->rowCount();

    if ($count > 0) {
    	$data = $sql->fetch();
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['update'])){

	$name = validate($_POST['name']);
	$email = validate($_POST['email']);
	$id = validate($_POST['id']);

	if (empty($name)) {
		header("Location: ../update.php?id=$id&error=Le prénom est requis");
	}else if (empty($email)) {
		header("Location: ../update.php?id=$id&error=L'Email est requis");
	}else {

        $sql = $pdo->prepare("UPDATE users
               SET name=?, email=?
               WHERE user_id=? ");
        $sql->execute(array($name,(string)$email,(int)$id));
        $count = $sql->rowCount();
       if ($count > 0) {
       	  header("Location: ../read.php?success=L'étudiant a été modifié");
       }else {
          header("Location: ../update.php?id=$id&error=Vous n'avez modifié aucune informations. Vous pouvez quitter cette page sans modifier en cliquant sur le bouton LIRE &$user_data");
       }
	}
}else {
	header("Location: read.php");
}