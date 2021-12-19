<?php
    include "config.php";

    if(isset($_POST['create'])){
        //On récupère les données
        $name = validate($_POST['name']);
        $email = validate($_POST['email']);
        $user_data = 'name='.$name. '&email='.$email;

        if(empty($name)){
            header("Location: ../index.php?error=Veuillez entrer un prénom&$user_data");
        }else if(empty($email)){
            header("Location: ../index.php?error=Veuillez entrer un email&$user_data");
        }else{
            try{
                //On vérifie que il n'existe pas déjà un utilisateur possédant le même email
                //Préparation de la requête
                $sql = $pdo->prepare("SELECT * FROM users WHERE email = ?");
                //Éxecution de la requête
                $sql->execute(array($email));
                //Vérification de la présence de l'utilisateur
                $count = $sql->rowCount();
                if($count > 0){
                    header("Location: ../index.php?error=Cet email est déjà utilisé!&$user_data");   
                }else{
                    //Préparation de la requête
                    $sql = $pdo->prepare("INSERT INTO users(name,email) VALUES(?,?)");
                    //Éxecution de la requête
                    $sql->execute(array($name,$email));

                    header("Location: ../read.php?success=La création de l'étudiant est un succés");
                }
                
            }catch(PDOException $exception){
                header("Location: ../index.php?error=Une érreur inconnue s'est produite&$user_data");
            }
        }
    }
?>