<h2>Liste des besoins :</h2>

<table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th>id_Fournisseur</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                <?php
                                    foreach ($courrier as $row) { ?>
                                        <tr>
                                            <td><strong><?php echo $row->id_fournisseur; ?></strong></td>
                                            <td><?php echo $row->details; ?></td>
                                            <td><a href="<?php echo null;// echo site_url('ProFormatController/index?idbesoin='. $row->idbesoin);?>">Ajouter Un proFormat</a></td>
                                        </tr>
                                    <?php } 
                                ?>
                                </tbody>
                            </table>

</div>