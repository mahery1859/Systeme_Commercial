<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table">
    <form action="<?php echo site_url('ProFormatController/Bon_Commande');?>" method="get">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Prix</th>
                    <th>id_Fournisseur</th>
                    <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                   
                <?php foreach($proFormat as $row): ?>
            <input type="hidden" name="idarticle" value="<?php echo $row->idarticle; ?>">
            <input type="hidden" name="quantite" value="<?php echo $row->quantite; ?>">
            <input type="hidden" name="date_commande" value="<?php echo $row->date; ?>">
            <input type="hidden" name="Prix_unitaire" value="<?php echo $row->prix_unitaire; ?>">
            <input type="hidden" name="id_Fournisseur" value="<?php echo $row->id_Fourniseur; ?>">
        <tr>
            <td><?php echo $row->nom_article; ?></td>
            <td><?php echo $row->prix_unitaire; ?></td>
            <td><?php echo $row->nom_fourniseur; ?></td>
            <td><?php echo $row->date; ?></td>
            <td><input type="submit" name="Acheter"></td>
            <!-- Ajoutez d'autres colonnes en fonction de votre table -->
        </tr>
    <?php endforeach; ?>

                    <!-- Ajoutez d'autres lignes selon vos besoins -->
                </tbody>
            </table>

            </form>
    
</body>
</html>