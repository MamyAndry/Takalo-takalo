<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/retouche.css">
    <link rel="stylesheet" href="css/bootstrap.css">
	<title>accueil</title>

</head>
<body>

<div id="center">
        <div id="background">
            <h1>TAKALO-TAKALO</h1>
        </div>
        <span><a href="<?php echo 'FormLoginAdmin'; ?>">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="button">Sign in as admin </button>
              </div>
            </a></span>
            <span><a href="<?php echo 'FormLoginUser'; ?>">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="button">Sign in as user</button>
              </div>
            </a></span>
    </div>
</body>
</html>