<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Import Images</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Formulaire d'ajout objet</title>
    <link rel="stylesheet" href="<?php echo site_url('assets/bootstrap/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/Contact-Form-Clean.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/Login-Form-Clean.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/Login-Form-Dark.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/Registration-Form-with-Photo.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/styles.css');?>">
  </head>
  <body>
    <section class="contact-clean">
        <h2 class="text-center">Ajouter des photos</h2>
        <form action="insertPhoto" method="post" enctype="multipart/form-data">
            <div class="input-group">
                <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="files[]" multiple>
                <button class="btn btn-outline-secondary" type="submit" id="inputGroupFileAddon04" name="submit">Import</button>
            </div>
        </form>
</section>
  </body>
</html>
