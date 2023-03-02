<?php
// Connexion à MySQL
try {
    $dbh = new PDO('mysql:host=localhost;dbname=site2', 'root', 'yoyolanyoyo123');
    echo "connexion réussi";
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}


session_start();
$iduser1 = $_SESSION['iduser'];

// Traitement des données
$query = $dbh->prepare('INSERT INTO articles (title, content, iduserfk) VALUES (:title, :content, :iduserfk);');
$query->execute([
    'title' => $_POST['title'],
    'content' => $_POST['content'],
    'iduserfk' => $iduser1,
]);

//Redirection
header('location: /Pages/home.php');
