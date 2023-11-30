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
                                        <th>Reponse</th>
                                        <th>Date de demande</th>
                                        <th>Date validation</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                <?php foreach ($historiques as $quantite) { ?>
                                    <tr>
                                        <td><?php echo $quantite['quantite_demander']; ?></td>
                                        <td><?php echo $quantite['nom_article']; ?></td>
                                        <td><?php echo $quantite['nom_categorie']; ?></td>
                                        <td><?php echo $quantite['nom_service']; ?></td>
                                        <td><?php echo $quantite['reponse']; ?></td>
                                        <td><?php echo $quantite['date_besoin']; ?></td>
                                        <td><?php echo $quantite['date_reponse']; ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>