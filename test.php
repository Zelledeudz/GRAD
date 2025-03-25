<?php
    error_reporting(E_ALL); 
    ini_set("display_errors", 1);
    session_start();
    if(!$_SESSION['username']){
        header('Location: ./accueil.php'); // La si leur session existe pas il peuvent pas accéder a la page
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>GRAD | Profil</title>
</head>
<body>
    <a href="./deconnexion.php">Deconnexion</a>
    <section class="container profil">
        <h1>Bienvenue <?=$_SESSION['username'];?></h1>
    </section>
</body>
</html>