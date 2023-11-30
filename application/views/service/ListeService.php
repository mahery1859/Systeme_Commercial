
    <h2>Liste des services: </h2>

    <table class="table">
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
                    <td><a href="<?php echo site_url('ServiceController/Modifier/'.$service['idservice']); ?>"><img src="<?php echo site_url()?>assets/img/down/pencil.svg" alt="Modifier"></a></td>
                    <td><a href="<?php echo site_url('ServiceController/Supprimer/'.$service['idservice']); ?>"><img src="<?php echo site_url()?>assets/img/down/trash3.svg" alt="Supprimer"></a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
