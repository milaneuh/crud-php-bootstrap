<?php
    include "config.php";

    //Préparation de la requête
    $sql = $pdo->prepare("SELECT * FROM users ORDER BY id DESC");
    $sql ->execute();
?>