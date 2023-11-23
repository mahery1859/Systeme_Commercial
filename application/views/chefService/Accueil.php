<form action="<?php echo site_url('ChefServiceController/Demander'); ?>" method="post">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Article</label>
                                <select class="form-select" id="inputGroupSelect01" name="article">
                                    <option selected>Choose...</option>
                                    <?php foreach($articles as $article) { ?>
                                        <option value="<?php echo $article['idarticle']; ?>"><?php echo $article['nom_article']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-floating">
                                <input
                                    type="number"
                                    class="form-control mb-3"
                                    id="floatingInput"
                                    placeholder="Nom d'un service"
                                    aria-describedby="floatingInputHelp"
                                    name = "quantite"
                                />
                                <label for="floatingInput">Quantite</label>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Demander</button>
                            </div>
                        </form>