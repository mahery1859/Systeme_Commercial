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

<table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th>Quantite</th>
                                        <th>Nom</th>
                                        <th>Categorie</th>
                                        <th>Service</th>
                                        <th>Date de demande</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                <?php foreach ($besoins as $besoin) { ?>
                                    <tr>
                                        <td><?php echo $besoin['quantite_demander']; ?></td>
                                        <td><?php echo $besoin['nom_article']; ?></td>
                                        <td><?php echo $besoin['nom_categorie']; ?></td>
                                        <td><?php echo $besoin['nom_service']; ?></td>
                                        <td><?php echo $besoin['date_besoin']; ?></td>
                                        <td><a href="<?php echo site_url('DirecteurController/CheckYes/'.$besoin['idbesoin']); ?>">valider</a></td>
                                        <td><a href="<?php echo site_url('DirecteurController/CheckNo/'.$besoin['idbesoin']); ?>">Refuser</a></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>