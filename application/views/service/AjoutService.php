
    <form action="<?php echo site_url('ServiceController/Ajouter'); ?>" method="post">
        <div>
            <label for="nom">Nom</label>
            <input type="text" placeholder="Nom d'un service" name="nom" id="nom" required/>
        </div>
        <div>
            <button type="submit">Send</button>
        </div>
    </form>

</body>
</html>
