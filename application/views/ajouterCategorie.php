<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Formulaire d'ajout ctegorie</title>
    <link rel="stylesheet" href="<?php echo site_url('assets/bootstrap/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/Contact-Form-Clean.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/Login-Form-Clean.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/Login-Form-Dark.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/Registration-Form-with-Photo.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/styles.css');?>">
</head>

<body>
    <section class="contact-clean">
        <form method="post" action="insertValObject">
            <h2 class="text-center">Ajouter une Categorie</h2>
            <div class="mb-3"><input class="form-control" type="text" name="categorie" value="1"></div>
            <div class="mb-3"><button class="btn btn-primary" type="submit">Ajouter</button></div>
        </form>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>