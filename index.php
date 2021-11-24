<!DOCTYPE html>
<html lang=fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap implémentation-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style/index.css"/>
    <title>Créer</title>
</head>
<body>
    <div class="container">
    <h4 class="display-3 text-center">Créer</h4><hr><br>
    <form action="php/create.php">
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="name" class="form-control" id="prenom" placeholder="Entrez le prénom">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Entrez l'email">
        </div>
     
        <button type="submit" id="envoyer" class="btn btn-primary">Envoyer</button>
    </form>
    </div>
</body>
</html>