<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome" href="/css/app-wa-02670e9412103b5852dcbe140d278c49.css?vsn=d">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-light.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="formulairecontact.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Site</title>
    <link rel="stylesheet" href="./css/accueil.css">
</head>
<?php include "Haut.php"?>
<body>
<div class= "text-center">
<h1 class="fw-bold fs-1 text-grey">Contact</h1>
</div>
<div class = "text-center">
    <img class = "border border-dark border-2 mt-2" id = "titre_accueil" src="./Ressources/entete01.jpg"></img>
</div>
<div class="container shadow-lg p-3 mb-5 mt-2 border border-dark border-1">
    <form class="row g-3">
        <div class="col-md-6">
            <label for="text" class="form-label">Nom</label>
            <input type="email" name="nom" class="form-control" id="nom">
        </div>
        <div class="col-md-6">
            <label for="prenom" class="form-label">Prenom</label>
            <input type="text" class="form-control" id="prenom" name="prenom">
        </div>
        <div class="col-12">
            <label for="codepostal" class="form-label">Code Postal</label>
            <input type="text" class="form-control" id="codepostal" name="codepostal">
        </div>
        <div class="col-12">
            <label for="adresse" class="form-label">Adresse</label>
            <input type="text" class="form-control" id="adress" name = "adresse">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="col-md-6">
            <label for="tel" class="form-label">Telephone</label>
            <input type="text" class="form-control" id="tel" name="tel">
        </div>
        <div class="form-floating">
        <textarea class="form-control" placeholder="Un commentaire ?" id="message" style="height: 100px"></textarea>
        <label for="message">Laissez-nous un message</label>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>
</div>
</body>
<?php include "bas.php"?>
<?php

