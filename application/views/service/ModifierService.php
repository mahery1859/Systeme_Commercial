<style>
    #formAuthentication {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    .mb-3 {
        margin-bottom: 15px;
    }

    .form-label {
        font-weight: bold;
    }

    .form-control {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
        margin-bottom: 10px;
    }

    .form-password-toggle {
        position: relative;
    }

    .input-group-merge {
        position: relative;
    }

    .input-group-text.cursor-pointer {
        cursor: pointer;
    }

    .form-check {
        margin-top: 10px;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .form-check-input {
        margin-right: 5px;
    }

    a {
        color: #007bff;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo site_url('ServiceController/UpdateService/'.$nom['idservice']); ?>" method="post">
        <p>Nom : <input type="text" name="nom" value="<?php echo $nom['nom_service']; ?>"></p>
        <p><input type="submit" value="Ajouter"></p>
    </form>
</body>
</html>