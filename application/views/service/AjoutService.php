
    <form action="<?php echo site_url('ServiceController/Ajouter'); ?>" method="post">
        <div>
            <input
                type="text"
                placeholder="Nom d'un service"
                name="nom"
                id="nom"
                required
            />
            <label for="nom">Nom</label>
        </div>
        <div>
            <button type="submit">Send</button>
        </div>
    </form>

</body>
</html>
