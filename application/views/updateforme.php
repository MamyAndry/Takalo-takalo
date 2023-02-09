<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>objet</title>
    <link rel="stylesheet" href="<?php echo site_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/fonts/ionicons.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/Login-Form-Clean.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/Login-Form-Dark.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/styles.css'); ?>">
</head>

<body>
    <section class="login-clean">
        <form method="post" action="<?php echo site_url('index.php/update/traitement/'); ?>"> 
            <h2 class="visually-hidden">CATEGORIE U</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="mb-3"><input class="form-control" type="hidden" name="id" placeholder="Nom" value='<?php echo $categorie['idCategorie'];?>'></div>
            <div class="mb-3"><input class="form-control" type="text" name="nom" placeholder="Nom" value='<?php echo $categorie['nom'];?>'></div>
            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">update</button></div>
        </form>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <div class="bas">
        
    </div>
</body>

</html>