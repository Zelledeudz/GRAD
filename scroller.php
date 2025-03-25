<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Réalisations</title>
    <link rel="stylesheet" href="css/accueil.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="realisations.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<?php include "Haut.php"?>

<body>
<p id = "titreR">Nos réalisations</p>
<img id="titre04" src="./Ressources/entete04.jpg"/> 
    <section class="galerie">
        <?php
            $dir = 'Ressources/Realisations';
            $files1 = scandir($dir);
    
            for ($i=2; $i < count($files1) ; $i++) { 
                echo "<div class=\"img4\"><a href=\"./Ressources/Realisations/".$files1[$i]."\"><img src=\"./Ressources/Realisations/".$files1[$i]."\" /></a></div> \n";
            }
        ?>
    </section>
</body>
<?php include "bas.php"?>;
</html>