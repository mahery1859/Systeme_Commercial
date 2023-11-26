    <div class="row">
        <div class="col-md-8">
        <form action="process_departement.php" method="post">
            <div class="form-group">
                <label for="depart">Nom du Departement :</label>
                <input type="text" class="form-control" id="depart" name="depart" required>
            </div>

            <div class="form-group">
                <label for="responsable">Responsable :</label>
                <input type="text" class="form-control" id="responsable" name="responsable">
            </div>

            <div class="form-group">
                <label for="contact_responsable">Contact du Responsable :</label>
                <input type="text" class="form-control" id="contact_responsable" name="contact_responsable">
            </div>

            <button type="submit" class="btn btn-primary">Ajouter Département</button>
        </form>
        </div>
    </div>
