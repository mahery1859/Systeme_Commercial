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

<h2>Liste des besoins :</h2>

<table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th>Departement</th>
                                        <th>Article</th>
                                        <th>Quantite</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                <?php
                                    foreach ($courrier as $row) { ?>
                                        <tr>
                                            <td><strong><?php echo $row->nom_service; ?></strong></td>
                                            <td><?php echo $row->nom_article; ?></td>
                                            <td><?php echo $row->quantite_demander; ?></td>
                                            <td><a href="<?php  echo site_url('FournisseurController/issertproFormat?idfournisseur='. $row->id_fournisseur. '& idbesoin='. $row->details);?>">Details</a></td>
                                        </tr>
                                    <?php } 
                                ?>
                                </tbody>
                            </table>

</div>