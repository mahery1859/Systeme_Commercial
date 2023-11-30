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

<h2>Demander Un proFormat</h2>
<br><br>
    <form action="<?php echo site_url('ChefServiceController/Demander'); ?>" method="post">
        <p>Article : 
            <select name="article">
                <?php foreach($articles as $article) { ?>
                    <option value="<?php echo $article['idarticle']; ?>"><?php echo $article['nom_article']; ?></option>
                    <?php } ?>
                </select>
        </p>
        <p>Quantite : <input type="number" name="quantite"></p>
        <p><input type="submit" value="Ajouter"></p>
    </form>


</body>
</html>