<?php
    include "config.php";

    if(isset($_GET['id'])){
        $id = validate($_GET['id']);

        $sql = $pdo->prepare("DELETE FROM users
                              WHERE id= ? ");
        $sql->execute(array((int)$id));
        $count = $sql->rowCount();
       if ($count > 0) {
       	  header("Location: ../read.php?success=L'étudiant a été supprimé");
       }else {
          header("Location: ../read.php?error=Erreur de connexion avec la base de données&$user_data");
       }
    }else {
	    header("Location: read.php");
    }
?>