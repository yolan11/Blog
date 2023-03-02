<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HeaderRegister</title>
    <style>
        body{
            margin: 0;
        }

        .header{
            margin: 0;
            background-color: white;
            width: 100%;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        a{
            font-size: 100%;
            margin: 10px;
            padding: 10px;
            text-decoration: none;
            color: black;
            border-width: 3px;
            border-style: solid;
            border-color:black;
        }

        a:hover{
            background-color: black;
            color: white;
            transition: 0.5s;
        }

        .logoSite{
            width: 40px;
            padding: 10px;
        }

        .divLogo{
            width: 50%;
            display: flex;
            align-content: center;
            justify-content: left;
        }
        .divBouton{
            width: 50%;
            display: flex;
            align-content: center;
            justify-content: right;
        }


    </style>
</head>
<body>
<div class="header">
    <div class="divLogo">
        <img class="logoSite" src="../Images/Transparent_Image_2.png">
    </div>
    <div class="divBouton">
        <a id="bouton" href="../Authentification/deconnexion.php">Deconnexion</a>
    </div>
</div>
</body>
</html>
