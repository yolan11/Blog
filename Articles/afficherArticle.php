<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AffichageArticle</title>
    <link rel="stylesheet" href="../Css/StyleArticle.css">
</head>
<body>
<?php
// Connexion à MySQL
try {
    $dbh = new PDO('mysql:host=localhost;dbname=site2', 'root', 'yoyolanyoyo123');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>


<?php
//Afficher les articles
$query = $dbh->query('SELECT idarticles, title, content, created_at FROM articles ORDER BY idarticles DESC;');

while ($data = $query->fetch())
    {
        ?>
        <div class="eachArticle">
            <div class="title">
                <?php echo $data['title'];?>
            </div>
            <div class="content">
                <?php echo $data['content'];?>
            </div>
            <div class="time">
                <?php echo $data['created_at'];?>
            </div>
        </div>
    <?php
    }
?>
</body>
</html>
