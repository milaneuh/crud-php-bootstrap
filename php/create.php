<?php
    include "config.php";

    if(isset($_POST['create'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $name = validate($_POST['name']);
        $email = validate($_POST['email']);

        $user_data = 'name='.$name. '&email='.$email;

        if(empty($name)){
            header("Location: ../index.php?error=Name is required&$user_data");
        }else if(empty($email)){
            header("Location: ../index.php?error=Email is required&$user_data");
        }else{

            $sql = "INSERT INTO users(name, email) 
            VALUES('{$name}','{$email}')";

            $result = mysqli_query($conn,$sql);

            if($result){
                echo "sucess";
            }else{
                header("Location: ../index.php?error=unknow error occured&$user_data");
            }
        }
    }
?>