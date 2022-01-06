<?php
  // Création du DSN
  $dsn = 'mysql:host=localhost;dbname=crud;port=3306;charset=utf8';
  
  // Création et test de la connexion
  
  try {
    $pdo = new PDO($dsn,'root','');
  }
  catch (PDOException $exception) {
    echo $exception->getMessage();
  } 

  
  function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>