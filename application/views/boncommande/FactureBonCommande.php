
            <h3><center>Bon de commande</center></h3>
            <!-- Tableau du stock -->
<br><br>
    <?php foreach($facture as $row): ?>
            <h5><b>Departement:&nbsp;&nbsp;&nbsp;</b> <?php echo $row->nom_service; ?></h5>
            <h5><b>Produit:&nbsp;&nbsp;&nbsp;</b> <?php echo $row->nom_article; ?></h5>
            <h5><b>Quantité:&nbsp;&nbsp;&nbsp;</b> <?php echo $row->quantite_demander; ?></h5>
            <h5><b>Date de commande:&nbsp;&nbsp;&nbsp;</b> <?php echo $row->date; ?></h5>
            <h5><b>Prix unitaire:&nbsp;&nbsp;&nbsp;</b> <?php echo $row->prix_unitaire; ?>&nbsp;<b>MGA</b></h5>
            <h5><b>Fournisseur:&nbsp;&nbsp;&nbsp;</b> <?php echo $row->nom_fournisseur; ?></h5>

            <!-- Ajoutez d'autres colonnes en fonction de votre table -->
    <?php endforeach; 
    $PrixHT = $row->prix_unitaire * $row->quantite_demander;
    ?>
    <br><br><br>
            <h5><b>PrixHorsTaxe:&nbsp;&nbsp;&nbsp;</b> <?php echo $PrixHT; ?><b>&nbsp;MGA</b></h5>
            <?php $TVA =  ($PrixHT * $row->tva)/100; ?>
            <h5><b>TVA:</b> <?php echo $TVA; ?> <b>&nbsp;MGA</b></h5>
            <?php $Pttc = $TVA+$PrixHT; ?>
            <h5><b>Prix TTC :</b> <?php echo $Pttc; ?> <b>MGA</b></h5>
          <br><br><br><br>          <!-- Ajoutez d'autres lignes selon vos besoins -->
        <h5><b>Prix Total à verser:</b> &nbsp;&nbsp;<?php echo $Pttc; ?>&nbsp;<b>MGA</b></h5>
 
<?php

if($Message == 0 || $Message == null ){
?>
<button><a href="<?php echo site_url("index.php/BoncommandeController/envoyerbon?idFacture=$row->id&prixttc=$Pttc")?>">Envoyer la transaction</a></button>
<?php
}else{
    echo "<h4>Facture Régler</h4>";
}

?>

    <!-- Ajoutez le lien vers Bootstrap JS et jQuery ici -->
 