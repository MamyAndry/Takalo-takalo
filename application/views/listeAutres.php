<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Produits</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="<?php echo site_url('css/bootstrap.css'); ?>">
    </head>
    <body>
    <table class="table table-striped-columns">
        <thead>
            <tr>
                <th scope="col">Proprietaire</th>
                <th scope="col">Objet</th>
                <th scope="col">Description</th>
                <th scope="col">Prix estimatif</th>
                <th scope="col"></th>

            </tr>
        </thead>
        <tbody>
            <?php for($i = 0 ; $i < count($list) ; $i++){?>
                <tr>
                    <th><?php echo $list['idUser'];?></th>
                    <td><?php echo $list['nom'];?></td>
                    <td><?php echo $list['description'];?></td>
                    <td><?php echo $list['prix'];?></td>
                    <td><a href="<?php echo $list['idObjet'];?>"><button type="button" class="btn btn-secondary">Echanger</button></a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </body>