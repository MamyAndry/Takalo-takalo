<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Inscription</title>
    <link rel="stylesheet" href="<?php echo site_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/fonts/ionicons.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/Login-Form-Clean.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/Login-Form-Dark.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/Registration-Form-with-Photo.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/styles.css'); ?>">
</head>

<body>
    <section class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post" action="<?php echo site_url('index.php/Inscription');?>">
                <h2 class="text-center"><strong>INSCRIPTION</strong></h2>
                <br>
                <div class="mb-3"><input class="form-control" type="text" name="nom" placeholder="Nom"></div>
                <br>
                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                <br>
                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <br>
                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Sign Up</button></div>
            </form>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>