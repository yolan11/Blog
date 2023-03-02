<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
    <link rel="shortcut icon" type="image/png" href="../Images/Transparent_Image_2.png"/>
    <link rel="stylesheet" href="../Css/StyleRegister.css">
</head>
<body>
<?php
require 'templates/headerRegister.php' ?>
<div class="formulaire">
    <div class="formulaireTitle">
        <p>Inscription</p>
    </div>
    <div class="formulaireRegister">
        <form action="../Authentification/register.php" method="post">
            <input placeholder="Prénom" class="form-control" id="firstname" type="text" name="firstname" required>
            <input placeholder="Nom" class="form-control" id="lastname" type="text" name="lastname" required>
            <input placeholder="Mail" class="form-control" id="mail" type="email" name="mail" required>
            <input placeholder="Mot de passe" class="form-control" id="password" type="password" name="password" required>
            <button class="boutonForm" type="submit">S'inscrire</button>
        </form>
    </div>
</div>


</body>
</html>


