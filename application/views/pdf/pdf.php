<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bon de commande</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #fff;
            color: #333;
            margin: 0;
            padding: 20px;
            line-height: 1.6;
        }

        h3 {
            text-align: center;
            color: #007bff;
            margin-top: 0;
        }

        h5 {
            margin-bottom: 5px;
        }

        b {
            font-weight: bold;
        }

        hr {
            border: 0.5px solid #ddd;
            margin: 20px 0;
        }

        /* Add additional styling based on your requirements */

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Total section styling */
        .total-section {
            margin-top: 20px;
        }

        /* Add more styling as needed */

    </style>
</head>
<body>

    <h3>Bon de commande</h3>

    <?php foreach ($facture as $row): ?>
        <h5><b>Departement:&nbsp;&nbsp;&nbsp;</b> <?php echo $row->nom_service; ?></h5>
        <h5><b>Produit:&nbsp;&nbsp;&nbsp;</b> <?php echo $row->nom_article; ?></h5>
        <h5><b>Quantité:&nbsp;&nbsp;&nbsp;</b> <?php echo $row->quantite_demander; ?></h5>
        <h5><b>Date de commande:&nbsp;&nbsp;&nbsp;</b> <?php echo $row->date; ?></h5>
        <h5><b>Prix unitaire:&nbsp;&nbsp;&nbsp;</b> <?php echo $row->prix_unitaire; ?>&nbsp;<b>MGA</b></h5>
        <h5><b>Fournisseur:&nbsp;&nbsp;&nbsp;</b> <?php echo $row->nom_fournisseur; ?></h5>
    <?php endforeach;

    $PrixHT = $row->prix_unitaire * $row->quantite_demander;
    ?>
    <hr>

    <h5><b>PrixHorsTaxe:&nbsp;&nbsp;&nbsp;</b> <?php echo $PrixHT; ?><b>&nbsp;MGA</b></h5>
    <?php $TVA = ($PrixHT * $row->tva) / 100; ?>
    <h5><b>TVA:</b> <?php echo $TVA; ?> <b>&nbsp;MGA</b></h5>
    <?php $Pttc = $TVA + $PrixHT; ?>
    <h5><b>Prix TTC :</b> <?php echo $Pttc; ?> <b>MGA</b></h5>
    <hr>

    <div class="total-section">
        <h5><b>Prix Total à verser:</b> &nbsp;&nbsp;<?php echo $Pttc; ?>&nbsp;<b>MGA</b></h5>
    </div>

</body>
</html>
