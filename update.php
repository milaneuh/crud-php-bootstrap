<?php include"php/update.php"; ?>
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
    <title>Modifier</title>
</head>
<body>
    <div class="container">
    <form action="php/update.php" method="post">
        <h4 class="display-3 text-center">Modifier</h4><hr><br>
        
        <!--ERROR ALERT-->
        <?php if(isset($_GET['error'])){?>
            <div class="alert alert-danger text-center" role="alert">
                <?php echo $_GET['error']; ?>
            </div>
        <?php } ?>

        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input 
                name="name" 
                type="name" 
                class="form-control" 
                id="prenom" 
                value="<?php echo $data['name'] ?>">
            <input
                name="id"
                type="text"
                value="<?php echo $data['user_id'] ?>"
                hidden >
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input 
                name="email" 
                type="email" 
                class="form-control" 
                id="email" 
                value="<?php echo $data['email'] ?>">
        </div>
     
        <button 
            name="update"
            type="submit" 
            id="envoyer" 
            class="btn btn-primary">Modifier</button>
        <a href="read.php" class="link-primary">Lire</a>
    </form>
    </div>
</body>
</html>