<?php
// Connexion à MySQL
try {
    $dbh = new PDO('mysql:host=localhost;dbname=site2', 'root', 'yoyolanyoyo123');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}



$query = $dbh->prepare('SELECT iduser, mail, password FROM user WHERE mail = ?');
$query->execute([$_POST['mail']]);



$user = $query->fetch();

if ($user) {
    if (password_verify($_POST['password'], $user['password'])) {
        session_start();
        $_SESSION['iduser'] = $user['iduser'];
        $_SESSION['is-connected'] = true;

        unset($_SESSION['error-connection']);

        header('location: /Pages/home.php');
    } else {
        session_start();
        $_SESSION['error-connection'] = "L'email ou le mot de passe est incorrect";

        header('location: /pages/login.php');
    }
} else {
    session_start();
    $_SESSION['error-connection'] = "L'email ou le mot de passe est incorrect";

    header('location: /pages/login.php');
}
