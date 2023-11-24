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
                                            <td><a href="<?php echo site_url('ProFormatController/index?idarticle='. $row->idarticle);?>">Générer proFormat</a></td>
                                        </tr>
                                    <?php } 
                                ?>
                                </tbody>
                            </table>