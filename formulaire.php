<?php
   try {
       $conn = new PDO("mysql:host=localhost;dbname=GRAD", 'mysql', 'mysql');
       echo "Connexion réussie !";
   } catch (PDOException $e) {
       echo "Erreur de connexion : " . $e->getMessage();
   }
    $nom = strip_tags($_POST['nom']);
    $prenom = strip_tags($_POST['prenom']);
    $adresse = strip_tags($_POST['adresse']);
    $email = strip_tags($_POST['email']);

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "L'adresse e-mail ",$email," est valide ";
    }else{
        echo "l'adresse e-mail ",$email," n'est pas valide ";
    }

 $nom = strip_tags($_POST['nom']);
 $prenom = strip_tags($_POST['prenom']);
 $adresse = strip_tags($_POST['adresse']);
 $email = strip_tags($_POST['email']);
 $codepostal = strip_tags($_POST['codepostal']);
 $tel = strip_tags($_POST['tel']);
 $lemessage = strip_tags($_POST['message']);
 $carctspe = "#^[a-z0-9.@]+$#i";
 $carctspe1 = "#^[0-9]+$#i";

 if (preg_match($carctspe , $nom) && preg_match($carctspe , $prenom)&& preg_match($carctspe1 , $tel))
 {
 echo "Bienvenue ",$prenom," ",$nom," votre adresse est ",$adresse," ",$codepostal,", votre numéro de téléphone est le : ",$tel,". Votre formulaire a bien été envoyé. ";
 }
 else
 {
 echo "Votre prénom,votre nom et votre numéro ne doivent pas contenir de caractères spéciaux. ";
 };

$sql = "INSERT INTO Contact (nom, prenom, cp, adresse, email, telephone, message)
        VALUES ('$nom', '$prenom', '$codepostal', '$adresse', '$email', '$tel', '$lemessage')";
        echo($sql);
$conn->exec($sql);
?>