<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Header</title>
    <style>
        html, body{
            height: 100%;
        }

        body{
            margin: 0;
        }

        .header{
            margin: 0;
            background-color: white;
            width: 100%;
            height: 100%;
        }

        #bouton{
            font-size: 100%;
            margin: 50px;
            padding: 10px 50px 10px 50px;
            text-decoration: none;
            color: black;
            border-width: 3px;
            border-style: solid;
            border-color:black;
        }

        #bouton:hover{
            background-color: black;
            color: white;
            transition: 0.5s;
        }

        .logoSite{
            width: 150px;
            padding: 10px;
        }

        .divLogo{
            width: 100%;
            height: 30%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .divBouton{
            width: 100%;
            height: 70%;
            display: flex;
            justify-content: center;
            align-items: center;
        }


    </style>
</head>
<body>
<div class="header">
    <div class="divLogo">
        <img class="logoSite" src="../Images/Transparent_Image_2.png">
    </div>
    <div class="divBouton">
        <a id="bouton" href="../Pages/register.php">S'inscrire</a>
        <a id="bouton" href="../Pages/login.php">Se connecter</a>
    </div>
</div>
</body>
</html>



