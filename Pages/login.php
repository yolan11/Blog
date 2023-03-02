<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
    <link rel="shortcut icon" type="image/png" href="../Images/Transparent_Image_2.png"/>
    <link rel="stylesheet" href="../Css/StyleLogin.css">
</head>
<body>
<?php
require 'templates/headerLogin.php' ?>
<div class="formulaire">
    <div class="formulaireTitle">
        <p>Connexion</p>
    </div>
    <div class="formulaireLogin">
        <form action="../Authentification/login.php" method="post">
            <input placeholder="Mail" class="form-control" id="mail" type="mail" name="mail" required>
            <input placeholder="Mot de passe" class="form-control" id="password" type="password" name="password" required>
            <button class="boutonForm" type="submit">Se connecter </button>
        </form>
    </div>
</div>
</body>
</html>
