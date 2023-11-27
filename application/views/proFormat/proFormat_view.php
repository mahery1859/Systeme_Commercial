<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table">
    
                <thead>
                    <tr>
                    <th>Fournisseur</th>
                    <th>Article</th>
                    <th>Prix Unitaire</th>
                    <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                   
                <?php foreach($proformat as $row): ?>
        <tr>
            <td><?php echo $row->nom_fourniseur; ?></td>
            <td><?php echo $row->nom_article; ?></td>
            <td><?php echo $row->prix_unitaire; ?></td>
            <td><?php echo $row->date; ?></td>
            <?php
            $idbesoin = $row->idbesoin;
            ?>
            <!-- Ajoutez d'autres colonnes en fonction de votre table -->
        </tr>

    <?php endforeach; ?>
    
                    <!-- Ajoutez d'autres lignes selon vos besoins -->
                </tbody>
            </table>
            <h5><button><a href="<?php echo site_url('ProFormatController/Bon_Commande?idbesoin=' . $idbesoin);?>">Généré Bon Commande</a></button></h5>
            
    
</body>
</html>