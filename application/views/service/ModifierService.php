<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo site_url('ServiceController/UpdateService/'.$nom['idservice']); ?>" method="post">
        <p>Nom : <input type="text" name="nom" value="<?php echo $nom['nom_service']; ?>"></p>
        <p><input type="submit" value="Ajouter"></p>
    </form>
</body>
</html>