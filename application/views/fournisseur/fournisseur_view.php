<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>bienvenue fournisseur <?php echo $this->session->userdata('idfournisseur');?></h2>
    <a href="<?php echo site_url('FournisseurController/courrier');?>">Courrier</a>
</body>
</html>