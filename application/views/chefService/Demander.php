<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demander Quelque Chose</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
    <form action="<?php echo site_url('ChefServiceController/Demander'); ?>" method="post">
        <p>Article : 
            <select name="article">
                <?php foreach($articles as $article) { ?>
                    <option value="<?php echo $article['idarticle']; ?>"><?php echo $article['nom_article']; ?></option>
                    <?php } ?>
                </select>
        </p>
        <p>Quantite : <input type="number" name="quantite"></p>
        <p><input type="submit" value="Ajouter"></p>
    </form>
</body>
</html>