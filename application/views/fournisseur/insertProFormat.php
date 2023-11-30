<style>
    form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    h2 {
        text-align: center;
        color: #333;
    }

    h5 {
        margin-bottom: 10px;
    }

    input[type="number"],
    input[type="date"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

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

