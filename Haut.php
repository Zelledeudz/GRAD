<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$bdd = new PDO('mysql:host=localhost;dbname=GRAD', 'mysql', 'mysql');
session_start();
?>

<nav class="navbar navbar-expand-lg bg-cacadoie border-bottom border-black border-2 shadow">
  <div class="container-fluid">
    <a class="navbar-brand">
    <img src="./Ressources/Logo_Grad.jpg" href="accueil.php" width="40%"/>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse nav justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <?php 
          if(isset($_SESSION['username'])){
            ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-light fa-user fa-lg" style="color: #ffffff;"></i>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="connexion.php">Profil</a></li>
                <li><a class="dropdown-item" href="deconnexion.php">Se deconnecter</a></li>
              </ul>
            </li>
            <?php
          } else {
            ?>
           <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-light fa-user fa-lg" style="color: #ffffff;"></i>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="connexion.php">Se connecter</a></li>
                <li><a class="dropdown-item" href="inscription.php">S'inscrire</a></li>
              </ul>
            </li>
            <?php
          }
        ?>
        <a class="nav-link text-white" aria-current="page" href="accueil.php">Accueil</a>
        <a class="nav-link text-white" href="Nos prestations.php">Nos prestations</a>
        <a class="nav-link text-white" href="produits.php">Nos produits</a>
        <a class="nav-link text-white" href="realisations.php">Nos réalisations</a>
        <a class="nav-link text-white" href="contact.php">Contact</a>
        <?php 
          if(isset($_SESSION['username'])){
            ?>
            <div class="mt-2">
              <a href="#" class="position-relative text-decoration-none">
                <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-light fa-cart-shopping fa-lg" style="color: #ffffff;"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                  <?php 
                  $compter = $bdd->prepare('SELECT COUNT(*) FROM Panier');
                  $compter->execute();
                  $result = $compter->fetch();
                  echo ($result[0]);
                  ?>
                </span>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="panier.php">Panier</a></li>
              </ul>
            </li>
              </a>
            </div>
            <?php
            }
            ?>
      </div>
    </div>
  </div>
</nav>