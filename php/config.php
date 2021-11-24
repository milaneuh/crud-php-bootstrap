<?php
    $sname ="localhost";
    $uname = "root";
    $password ="";

    $db_name ="crud-php";

    $conn = mysqli_connect($sname,$uname,$password,$db_name);

    if(!$conn){
        echo "La connection à la base de données a échouée";
    }
?>