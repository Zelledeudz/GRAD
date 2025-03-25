<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produit</title>
</head>
<body>
    <?php 
    $bdd = new PDO('mysql:host=localhost;dbname=GRAD', 'mysql', 'mysql');
    $prod = $bdd->prepare('SELECT * FROM Produit');
    $resultaprod = $prod->execute();
    if ($prod->rowCount() > 0){
    while ($bois = $resultaprod->fetch(PDO::FETCH_ASSOC)) {
    echo    '<div class="card mb-3" style="max-width: 540px;">';
    echo        '<div class="row g-0">';
    echo            '<div class="col-md-4">';
    echo                '<img src="..." class="img-fluid rounded-start" alt="..."></div>';
    echo         '<div class="col-md-8">';
    echo        '<div class="card-body">';
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
    }
}
#PENSER A AJOUTER LES ' ET LES ECHOS POUR LE PROCHAIN COURS
    ?>
</body>
</html>