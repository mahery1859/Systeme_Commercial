
<style>
    .table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .table th,
    .table td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
    }

    .table th {
        background-color: #f2f2f2;
    }

    .table a {
        text-decoration: none;
        color: #007bff;
    }

    .table a:hover {
        text-decoration: underline;
    }
</style>

<table class="table" border="1">
                                <thead class="table-light">
                                    <tr>
                                        <th>Departement</th>
                                        <th>Produit</th>
                                        <th>Quantite</th>
                                        <th>Prix_unitaire</th>
                                        <th>Fournisseur</th>
                                        <th>Date</th>
                                        <th>%TVA</th>

                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                <?php
                                    foreach ($BonCommande as $row) { ?>
                                        <tr>
                                            <td><strong><?php echo $row->nom_service; ?></strong></td>
                                            <td><?php echo $row->nom_article; ?></td>
                                            <td><?php echo $row->quantite_demander; ?></td>
                                            <td><?php echo $row->prix_unitaire; ?></td>
                                            <td><?php echo $row->nom_fournisseur; ?></td>
                                            <td><?php echo $row->date; ?></td>
                                            <td><?php echo $row->tva; ?></td>
                                            <td><a href="<?php echo site_url('BoncommandeController/envoyer?idboncommande=' . $row->id); ?>">Détails</a></td>
                                        
                                        </tr>
                                        <?php }?>
                                </tbody>
                            </table>
