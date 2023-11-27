<h2>Donner ProFormat :</h2>
<form action="<?php echo site_url('FournisseurController/proFormat')?>" method="get">

                                <?php
                                    foreach ($besoin as $row) { ?>
    <input type="hidden" name="idbesoin" value="<?php echo $row->idbesoin?>">
    <input type="hidden" name="idarticle" value="<?php echo $row->idarticle?>">
    <h5><strong>Article :</strong> <?php echo $row->nom_article?></h5>
    <h5><strong>Prix_Unitaire</strong><input type="number" name="prix_unitaire"></h5>
    <h5><strong>Date</strong><input type="date" name="date" ></h5>
    <?php $idfournisseur = $this->session->userdata('idfournisseur');?>
    <input type="hidden" name="id_fournisseur" value="<?php echo $idfournisseur?>">
    <input type="submit" value="envoyer">
                                    <?php } 
                                ?>

 </form>

