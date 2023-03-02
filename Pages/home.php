<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
    <link rel="shortcut icon" type="image/png" href="../Images/Transparent_Image_2.png"/>
    <link rel="stylesheet" href="../Css/StyleHome.css">
</head>
<body>
<?php
require 'templates/headerHome.php' ?>
<div class="coloneArticle">
    <div class="formArticle">
        <form action="../Articles/nouvelArticle.php" method="post">
            <input placeholder="Titre" class="form-control" id="title" type="text" name="title" required>
            <textarea placeholder="Veuillez saisir votre text" class="form-control" id="content" type="text" name="content" required></textarea>
            <button class="boutonForm" type="submit">Publier </button>
        </form>
    </div>
    <div class="articles">
        <?php
        require '../Articles/afficherArticle.php' ?>
        ?>
    </div>
</div>
</body>
</html>
