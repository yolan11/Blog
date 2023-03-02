<?php
// Connexion à MySQL
try {
    $dbh = new PDO('mysql:host=localhost;dbname=site2', 'root', 'yoyolanyoyo123');
    echo "connexion réussi";
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

// Hash du mot de passe
$passwordHashed = password_hash($_POST['password'], PASSWORD_BCRYPT);

// Traitement des données
$query = $dbh->prepare('INSERT INTO user (firstname, lastname, mail, password) VALUES (:firstname, :lastname, :mail, :password);');
$query->execute([
    'firstname' => $_POST['firstname'],
    'lastname' => $_POST['lastname'],
    'mail' => $_POST['mail'],
    'password' => $passwordHashed,
]);

// Redirection
header('location: /pages/login.php');

