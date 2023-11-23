<style>
        body {
            font-family: 'Consolas', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            border-radius: 8px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: #007bff;
            color: #ffffff;
        }

        tbody tr:hover {
            background-color: #f0f8ff;
        }

        td a {
            display: inline-block;
            margin-right: 10px;
            color: #007bff;
            transition: color 0.3s ease;
        }

        td a:hover {
            color: #0056b3;
        }

        img {
            width: 20px;
            height: 20px;
            vertical-align: middle;
        }
    </style>


    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($services as $service) { ?>
                <tr>
                    <td><?php echo $service['nom_service']; ?></td>
                    <td><a href="<?php echo site_url('ServiceController/Modifier/'.$service['idservice']); ?>"><img src="../assets/img/down/pencil.svg" alt="Modifier"></a></td>
                    <td><a href="<?php echo site_url('ServiceController/Supprimer/'.$service['idservice']); ?>"><img src="../assets/img/down/trash3.svg" alt="Supprimer"></a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>