<form action="<?php echo site_url('ArticleController/Ajouter'); ?>" method="post">
<div>
                                <input
                                    type="text"
                                    placeholder="Nom d'un article"
                                    name = "nom"
                                />
                                <label>Nom</label>
                            </div>
                            <div >
                                <label >Categorie</label>
                                <select  name="categorie">
                                    <option selected>Choose...</option>
                                    <?php foreach($categories as $categorie) { ?>
                                        <option value="<?php echo $categorie['idcategorie']; ?>"> <?php echo $categorie['nom_categorie']; ?></option> 
                                    <?php } ?>
                                </select>
                            </div>
                            <div>
                                <button type="submit" ">Ajouter</button>
                            </div>
                        </form>