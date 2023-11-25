<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo site_url("assets/bootstrap/dist/css/bootstrap.css"); ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/bootstrap/dist/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/bootstrap/dist/css/bootstrap-theme.min.css"); ?>">
    <!-- <script src="assets/bootstrap/js/color-modes.js"></script> -->
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-dark sticky-top border-bottom" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="">Systeme Commercial</a>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="#offcanvas" aria-labelledby="#offcanvasLabel">
                <div class="offcanvas-body">
                    <ul class="navbar-nav flex-grow-1 justify-content-between">
                    <li class="nav-item"><a class="nav-link disabled" href="#">-</a></li>
                    <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                            <li class="nav-item"><a class="nav-link" href="<?php echo site_url("index.php/FournisseurController")?>">Courrier</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Parametre</a></li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
