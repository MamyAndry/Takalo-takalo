<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo site_url('css/retouche.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('css/bootstrap.css'); ?>">
	<title>accueil</title>

</head>
<body>

<div id="center">
        <div id="background">
            <h1>TAKALO-TAKALO</h1>
        </div>
        <center>
        <div>
          <div class="button">
              <a href="<?php echo site_url('index.php/FormLoginAdmin'); ?>">
                <button class="btn btn-primary" type="button"><h3>Sign in as an Admin</h3></button>
              </a>
          </div>
          <br>
          <div class="button">
              <a href="<?php echo site_url('index.php/FormLoginUser'); ?>">
                <button class="btn btn-primary" type="button"><h3>Sign in as an User</h3></button>
              </a>
          </div>
        </div>
      </center>
    </div>
</body>
</html>