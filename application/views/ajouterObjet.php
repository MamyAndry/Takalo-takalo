<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Formulaire d'ajout objet</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <section class="contact-clean">
        <form method="post" action="insertValObject">
            <h2 class="text-center">Ajouter un objet</h2>
            <div class="mb-3"><input class="form-control" type="hidden" name="idUtilisateur" value="1"></div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="idCategorie">
                    <option selected>Categories</option>
                    <?php for ($i=0; $i < count($categories); $i++) { ?>
                            <option value="<?php echo $categories[$i]['id'];?>"><?php echo $categories[$i]['nom'];?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3"><input class="form-control" type="text" name="nom" placeholder="Nom" value="bois" required></div>
            <div class="mb-3"><input class="form-control" type="text" name="prix" placeholder="Prix" value="1000" required></div>
            <div class="mb-3"><textarea class="form-control" name="description" placeholder="Description" rows="14" value="blabla" required></textarea></div>
            <div class="mb-3"><button class="btn btn-primary" type="submit">Suivant </button></div>
        </form>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>