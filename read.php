<?php include "php/read.php";?>
<!DOCTYPE html>
<html lang=fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap implémentation-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--Feuille de style en cascade-->
    <link rel="stylesheet" href="style/index.css"/>
    <title>Créer</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <h4 class="display-3 text-center">Lire</h4><br> 
            
            <!--SUCCESS ALERT-->
            <?php if(isset($_GET['success'])){?>
            <div class="alert alert-success" role="alert">
                <?php echo $_GET['success']; ?>
            </div>
            <?php } ?>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Prénom</th>
                <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $count = 0;
                    while($data = $sql->fetch()){
                    $count++;                    
                ?>
                <tr>
                <th scope="row"><?=$count?></th>
                <td><?php echo $data['name'] ?></td>
                <td><?php echo $data['email']?></td>
                </tr>
                <tr>
                <?php } ?>
            </tbody>
            </table>
            <div class="link-right">
                <a href="index.php" class="link-primary">Créer</a>
            </div>
    </div>
</body>
</html>