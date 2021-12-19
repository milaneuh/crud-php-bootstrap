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
    <form action="php/create.php" method="post">
        <h4 class="display-3 text-center">Créer</h4><hr><br>
        
        <!--ERROR ALERT-->
        <?php if(isset($_GET['error'])){?>
            <div class="alert alert-danger" role="alert">
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
                value="<?php if(isset($_GET['name']))
                                echo ($_GET['name']); ?>"
                placeholder="Entrez le prénom">
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input 
                name="email" 
                type="email" 
                class="form-control" 
                id="email" 
                value="<?php if(isset($_GET['email']))
                                echo ($_GET['email']); ?>"
                placeholder="Entrez l'email">
        </div>
     
        <button 
            name="create"
            type="submit" 
            id="envoyer" 
            class="btn btn-primary">Créer</button>
        <a href="read.php" class="link-primary">Lire</a>
    </form>
    </div>
</body>
</html>