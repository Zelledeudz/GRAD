<?php
error_reporting(E_ALL); 
ini_set("display_errors", 1);
$bdd = new PDO('mysql:host=localhost;dbname=GRAD', 'mysql', 'mysql');
$invalid ="";
    if (isset($_POST['connexion'])){
        if(!empty($_POST['id']) && !empty($_POST['mdp'])){
            $id    = $_POST['id'];
            $mdp   = $_POST['mdp'];

            $get_User = $bdd->prepare('SELECT * FROM User WHERE identifiant = ? AND motdepasse = MD5(?)');
            $get_User->execute([$id, $mdp]);
            if($get_User->rowCount() > 0){
                $User = $get_User->fetch();
                session_start();
                $_SESSION['id'] = $User['id'];
                $_SESSION['username'] = $id;
                header('Location: ./accueil.php');
            } else {
                echo "Identifiant ou mot de passe invalide";
            }
        } else {
            echo "null";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/accueil.css">
</head>

<?php include "Haut.php"?>

<body>
    <div class=container>
        <div class = "row">
           <form action="" method="post">
            <div class=" mt-4 col-5 mx-auto shadow p-3 mb-5">
                <h2 class = mt-5>Déjà un compte ? Connectez-vous ! </h2>
                <?=$invalid ?>
                <div class="mb-3">
                    <label class="form-label">Identifiant</label>
                    <input type="text" class="form-control" name="id">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" name="mdp" >
                </div>
                <div class="mb-3 form-check d-flex justify-content-center">
                    <button type="submit" class="btn btn-success" name="connexion">Se connecter</button>
                </div>
            </div>
           </form>
        </div>
    </div> 
    <?echo($sql)?>   
</body>

<?php include "bas.php"?>
<body>

</body>
</html>