
<style>
        .containers {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .invoice-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 80%;
            max-width: 800px;
            overflow: hidden;
        }

        h3 {
            text-align: center;
            color: #007bff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        h5 {
            margin-bottom: 10px;
            color: #333;
        }

        b {
            font-weight: bold;
            color: #555;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button a {
            color: #fff;
            text-decoration: none;
        }

        button:hover {
            background-color: #0056b3;
        }

        .regler {
            font-size: 24px;
            color: #28a745;
            margin-top: 20px;
        }

        .pdf-btn {
            background-color: #28a745;
            margin-top: 20px;
            display: block;
        }

        .pdf-btn:hover {
            background-color: #218838;
        }
    </style>
    <div class="containers">
    <div class="invoice-container">
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
}7
?>
<button><a href="<?php echo site_url("PdfController/generer_pdf_view?idboncommande=" .$boncommande)?>">généré PDF</a></button>

</div>
</div>
    <!-- Ajoutez le lien vers Bootstrap JS et jQuery ici -->
 