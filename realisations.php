<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome" href="/css/app-wa-02670e9412103b5852dcbe140d278c49.css?vsn=d">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-light.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Nos Réalisations</title>
    <link rel="stylesheet" href="./css/accueil.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="realisations.js"></script>
</head>
<body>
    <?php include "Haut.php"?>
    <p id = "titreR">Nos réalisations</p>
    <img class="border border-dark border-2 mt-2" id="titre04" src="./Ressources/entete04.jpg"/> 
    <br>
        <Fieldset id="fsscroller">
            <section class="galerie">
                <?php
                    $dir = 'Ressources/Realisations';
                    $files1 = scandir($dir);
    
                    for ($i=2; $i < count($files1) ; $i++) { 
                    echo "<div class=\"img4\"><a href=\"./Ressources/Realisations/".$files1[$i]."\"><img src=\"./Ressources/Realisations/".$files1[$i]."\" /></a></div> \n";
                    }
                ?>
            </section>
        </Fieldset>
    <?php include "bas.php"?>
    
</body>
</html>