
<?php

    if (isset($_GET['erreur'])) {  ?>
      <p class="erreur" > <?php echo $error = "ProFormat déjà envoyer";?> </p>
        <?php  } 
?>

<?php foreach ($Besoin as $row) { ?>

<?php }?>
<table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th>Departement</th>
                                        <th>Produit</th>
                                        <th>Quantite</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                <?php
                                    foreach ($Besoin as $row) { ?>
                                        <tr>
                                            <td><strong><?php echo $row->nom_service; ?></strong></td>
                                            <td><?php echo $row->nom_article; ?></td>
                                            <td><?php echo $row->quantite_demander; ?></td>
                                            <td><?php echo $row->date_besoin; ?></td>
                                            <td><a href="<?php echo site_url('ProFormatController/index?idbesoin=' . $row->idbesoin); ?>">DemanderProFormat</a></td>
                                            <td><a href="<?php echo site_url('ProFormatController/getproformat?idbesoin=' . $row->idbesoin); ?>">GetProFormat</a><?php }?></td>

                                        </tr>

                                </tbody>
                            </table>
 

</div>