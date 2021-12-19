<?php
    include "config.php";

    if(isset($_POST['create'])){
        //Protection contre les injections SQL
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

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
                //Préparation de la requête
                $sql = $pdo->prepare("INSERT INTO users(name,email) VALUES(?,?)");
                //Éxecution de la requête
                $sql->execute(array($name,$email));

                echo "sucess";
            }catch(PDOException $exception){
                header("Location: ../index.php?error=Une érreur inconnue s'est produite&$user_data");
            }
        }
    }
?>