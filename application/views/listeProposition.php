<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Produits</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="<?php echo site_url('css/bootstrap.css'); ?>">
        <link rel="stylesheet" href="<?php echo site_url('https://fonts.googleapis.com/css?family=Mukta:300,400,700'); ?>"> 
        <link rel="stylesheet" href="<?php echo site_url('fonts/icomoon/style.css'); ?>">
        <link rel="stylesheet" href="<?php echo site_url('css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo site_url('css/magnific-popup.css'); ?>">
        <link rel="stylesheet" href="<?php echo site_url('css/jquery-ui.css'); ?>">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="<?php echo site_url('css/style.css'); ?>">
    
    </head>
    <body>
    <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index.html" class="js-logo-clone">Takalo</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li><a href="#"><span class="icon icon-person"></span></a></li>
                  <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                  <li>
                    <a href="cart.html" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count">2</span>
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
          <li><a href="<?php echo site_url('index.php/Acceuil');?>">Home</a></li>
            <li><a href="<?php echo site_url('index.php/showProposition');?>">Liste Proposition</a></li>
            <li><a href="<?php echo site_url('index.php/pageObjet'); ?>">Ajouter objet</a></li>
          </ul>
        </div>
      </nav>
    </header>

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