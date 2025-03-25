<?php 
error_reporting(E_ALL); 
ini_set("display_errors", 1);
$bdd = new PDO('mysql:host=localhost;dbname=GRAD', 'mysql', 'mysql');
if ( $_SERVER['REQUEST_METHOD'] === 'POST' ){
    $nom    = $_POST['produit'];
    $prix   = $_POST['prix'];
    $quantite  = $_POST['quantite'];
    $ajout_panier = $bdd->prepare('INSERT INTO Panier(produit, prix, nombre) Values (?, ?, ?)');
    $ajout_panier->execute([$nom, $prix, $quantite]);
    header('Location: produits.php');
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Nos produits</title>
    <link rel="stylesheet" href="./css/accueil.css">
</head>
<body>
<?php include "Haut.php"?>
    <div class="col text-center">
        <h1 class="fw-bold fs-1 text-grey">Nos produits</h1>
    </div>
    <div class="col text-center">
        <img class="border border-dark border-3 mt-2 mb-4" id="titre03" src="./Ressources/entete03.jpg" width="80%"/>
    </div>
<div class="container-fluid mx-auto d-flex flex-column align-items-center">
    <div class="row">
        <div class="col-6">
            <div class="card mb-3 bg-maron border border-dark border-2 text-center mb-1" style="max-width: 1000px;" id="cadrekebony">
                <div class="row g-0">
                    <div class="col-md-4 mt-4">
                        <img src="./Ressources/Realisations/Thermopin01.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Lames thermopins</h5>
                            <p class="card-text fs-6">
                            Le pin modifié thermiquement ne nécessite pas un traitement chimique supplémentaire et fait état d'une remarquable stabilité. 
                            La combinaison avec le Clip JuAn est parfaite. De qualité Saw-falling grade A-B, avec en moyenne 2 à 5 noeuds au mètre linéaire, il affiche une allure résolument rustique. 
                            Le thermopin est d'une densité faible: son pouvoir isolant sera d'autant plus important. La stabilité liée au traitement thermique garantit une tenue bien plus longue des produits de finition. 
                            Nous recommandons fortement l'application d'une huile pour préserver la couleur du bois.
                            <div>
                                <form action="produits.php" method="post" name="Thermo"> 
                                    <input name = "Thermo" type="submit" class="btn btn-light" value = "Ajouter au panier"></input>
                                    <input name = "prix" type="hidden" value="15"></input>
                                    <input name = "quantite" type="hidden" value="1"></input>
                                    <input name = "produit" type="hidden" value="lames thermopins"></input>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card mb-3 bg-maron border border-dark border-2 text-center mb-1" style="max-width: 1000px;" id="cadrekebony">
                <div class="row g-0">
                    <div class="col-md-4 mt-4">
                    <img src="./Ressources/Realisations/accoya12.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 ">
                        <div class="card-body">
                            <h5 class="card-title">Lames Accoya</h5>
                            <p class="card-text fs-6">
                            Imaginez un bois solide, récolté dans une foet à croissance et à renouvellement rapides, qui n'aurait aucune toxicité, aucune variation dimensionnelle et d'une durabilité supérieure à celle des meilleures essences tropicales. Si l'on accepte ou si l'on recherche le grisaillement traditionnel du bois, l'Accoya n'a besoin d'aucun traitement particulier. En revanche, ce bois se prête particulièrement bien à à l'application d'une huile teintée.
                            En effet, à l'inverse de tous les autres bois, la stabilité du support induit ici le triplement de la durée de vie de n'importe quel produit de finition.
                            <div>
                                <form action="" method="post"> 
                                    <input name = "Accoya" type="submit" class="btn btn-light" value = "Ajouter au panier"></input>
                                    <input name = "prix" type="hidden" value="9"></input>
                                    <input name = "quantite" type="hidden" value="1"></input>
                                    <input name = "produit" type="hidden" value="Accoya"></input>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-6">
                <div class="card mb-3 bg-maron border border-dark border-2 text-center mb-1" style="max-width: 1000px;" id="cadrekebony">
                    <div class="row g-0">
                        <div class="col-md-4 mt-4">
                        <img src="./Ressources/produits/Kebony.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Le bois Kebony </h5>
                            <p class="card-text fs-6">Un matériau révolutionnaire 
                            Le Kebony est beaucoup plus stable que le bois massif traditionnel. Sa couleur chaude brun-rouge s’apparente à celle des essences
                            tropicales, et évoluera vers une patine argentée qui lui gardera toute sa noblesse. Même sans aucune forme d’entretien, la longévité
                            du Kebonyest impressionnante.La société Kebony a été lauréate de nombreux et prestigieux prix pour ses innovations au service de la 
                            préservation de la ressource bois dans le cadre d’une démarche respectueuse de l’environnement.
                            <div>
                                <form action="" method="post"> 
                                    <input name = "Kebony" type="submit" class="btn btn-light" value = "Ajouter au panier"></input>
                                    <input name = "prix" type="hidden" value="10"></input>
                                    <input name = "quantite" type="hidden" value="1"></input>
                                    <input name = "produit" type="hidden" value="Kebony"></input>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card mb-3 bg-maron border border-dark border-2 text-center mt-1" style="max-width: 1000px;" id="cadredouglas">
                <div class="row g-0">
                    <div class="col-md-4 mt-4">
                        <img src="./Ressources/produits/douglas.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Le Douglas</h5>
                            <p class="card-text fs-6">
                                Grâce à un profilage expert et à une mise en œuvre particulière de la technologie Grad, le Douglas présente une résistance naturelle et une pérennité accrues. 
                                Après un passage en séchoir, le bois est soigneusement raboté, et combiné à son faible retrait radial, il devient idéal pour une fixation aisée avec le système innovant du clip JuAn®.
                                 Conformément à la norme régissant les platelages extérieurs en bois (DTU 51-4), ces améliorations dans la conception des lames garantissent leur capacité à répondre efficacement aux sollicitations de la classe 4.
                            </p>
                            <div>
                                <form action="produits.php" method="post" name="Douglas"> 
                                    <input name = "Douglas" type="submit" class="btn btn-light" value = "Ajouter au panier"></input>
                                    <input name = "prix" type="hidden" value="13"></input>
                                    <input name = "quantite" type="hidden" value="1"></input>
                                    <input name = "produit" type="hidden" value="Douglas"></input>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "bas.php"?>
</body>
</html>