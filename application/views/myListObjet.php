<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo site_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/fonts/ionicons.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/Login-Form-Clean.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/Login-Form-Dark.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/Registration-Form-with-Photo.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/styles.css'); ?>">
</head>
<body>
    <form action="lister" method="post">
        <div class="col-md-4">
            <label for="inputState" class="form-label">Marges</label>
            <select id="inputState" class="form-select" name="marge">
                <option values="10">+/-10%</option>
                <option values="20">+/-20%</option>
            </select>
        </div>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">A echanger</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="idObjet" id="gridRadios1" value="<?php echo $objets[0]['idObjet'];?>" checked>
                    <label class="form-check-label" for="gridRadios1"><?php echo $objets[0]['nom'];?> <?php echo $objets[0]['prix'];?> Ar</label>
                </div>
                <?php for ($i=1; $i < count($objets); $i++) { ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="idObjet" id="gridRadios1" value="<?php echo $objets[$i]['idObjet'];?>">
                        <label class="form-check-label" for="gridRadios1"><?php echo $objets[$i]['nom'];?> <?php echo $objets[$i]['prix'];?> Ar</label>
                    </div>
                <?php } ?>
            </div>
        </fieldset>
        <button type="submit" class="btn btn-primary">Chercher</button>
    </form>
</body>
</html>