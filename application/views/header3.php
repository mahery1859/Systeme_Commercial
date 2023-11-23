<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Système Commercial - Accueil</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Consolas', sans-serif;
            background-color: #f8f9fa;
        }

        header {
            background-color: #343a40;
            color: #ffffff;
            padding: 15px 0;
            transition: background-color 0.5s ease; /* Transition de couleur de fond */
        }

        .container {
            width: 80%;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5em;
            font-weight: bold;
            color: #ffffff;
            text-decoration: none;
            transition: color 0.3s ease; /* Transition de couleur du texte */
        }

        nav {
            display: flex;
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            margin: 0 15px;
            position: relative;
            transition: color 0.3s ease; /* Transition de couleur du texte */
        }

        nav a:hover {
            color: #17a2b8; /* Nouvelle couleur au survol */
        }

        /* Ajout d'une petite animation de survol pour les liens */
        nav a::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #17a2b8; /* Couleur de l'animation */
            visibility: hidden;
            transform: scaleX(0);
            transition: all 0.3s ease-in-out;
        }

        nav a:hover::before {
            visibility: visible;
            transform: scaleX(1);
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: flex-start;
            }

            nav {
                margin-top: 15px;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="container">
            <a class="logo" href="#">Système Commercial</a>
            <nav>
                <a href="<?php echo site_url('ChefServiceController/index');?>">Accueil</a>
                <a href="<?php echo site_url('ChefServiceController/Add');?>">ajout</a>
                <a href="<?php echo site_url('ChefServiceController/DemandeAff');?>">Demande</a>
            </nav>
        </div>
    </header>