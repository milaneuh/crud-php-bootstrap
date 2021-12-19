<?php
  // Création du DSN
  $dsn = 'mysql:host=localhost;dbname=crud-php;port=3306;charset=utf8';
  
  // Création et test de la connexion
  
  try {
      $pdo = new PDO($dsn,'root','');
  }
  catch (PDOException $exception) {
    echo "La connection à la base de données a échouée";
  } 

  
  function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>