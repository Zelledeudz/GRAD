<?php 
    error_reporting(E_ALL); 
    ini_set("display_errors", 1);
    $bdd = new PDO('mysql:host=localhost;dbname=GRAD', 'mysql', 'mysql');
    $user_exist = "";
    if (isset($_POST['inscription'])){
        if(!empty($_POST['id']) && !empty($_POST['mdp'])){
            $id    = $_POST['id'];
            $mdp   = $_POST['mdp'];
            $role  = "Utilisateur";
            $check_user = $bdd->prepare('SELECT identifiant FROM User WHERE identifiant = ?');
            $check_user->execute([$id]);
            if ($check_user->rowCount() > 0){
                $user_exist = "L'identifiant existe déjà";
            } else {
                $create_user = $bdd->prepare('INSERT INTO User(identifiant, motdepasse, role) VALUES(?, MD5(?), ?)');
                $create_user->execute([$id, $mdp, $role]);
                header('Location: ./connexion.php');
            }
        } else {
           echo "Tous les champs ne sont pas remplis";
        }
    }
?> 
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
            <div class="mt-4 col-5 mx-auto shadow p-3 mb-5">
                <form action="" method="post">
                    <h3 class= mt-4>Pas encore de compte ? Créez-en un !</h3>
                    <?=$user_exist?> 
                    <div class="mb-3">
                        <label class="form-label">Identifiant</label>
                        <input type="text" class="form-control" name="id">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" name="mdp">
                    </div>
                    <div class="mb-3 form-check d-flex justify-content-center">
                        <input type="submit" class="btn btn-success" name="inscription" value="S'inscrire"></button>
                    </div>
                </form>
            </div>
        </div>
    </div> 
</body>

<?php include "bas.php"?>