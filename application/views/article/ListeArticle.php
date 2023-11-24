<h2>Liste des articles :</h2>

<table class="table">
                                <thead >
                                    <tr>
                                        <th>Nom</th>
                                        <th>Categorie</th>
                                    </tr>
                                </thead>
                                <tbody >
                                <?php
                                    foreach ($articles as $article) { ?>
                                        <tr>
                                            <td><strong><?php echo $article['nom_article']; ?></strong></td>
                                            <td><?php echo $article['nom_categorie']; ?></td>
                                            <td><a href="#"><img src="<?php echo site_url()?>assets/img/down/pencil.svg" alt=""></a></td>
                                            <td><a href="<?php echo site_url('ArticleController/Delete/'.$article['idarticle']); ?>"><img src="<?php echo site_url()?>assets/img/down/trash3.svg" alt=""></a></td>
                                        </tr>
                                    <?php } 
                                ?>
                                </tbody>
                            </table>

</div>