<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Test TableauCSV</title>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Code postal</th>
            <th>Adresse</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>Message<th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $conn = new PDO("mysql:host=localhost;dbname=GRAD", 'mysql', 'mysql');
        $requete = "SELECT * FROM Contact";
        ?>
        <?php 
        foreach ( $rowAll as $row ) {
        ?>
        <tr>
            <td><?php echo $row['Nom']; ?></td>
            <td><?php echo $row['Prenom']; ?></td>
            <td><?php echo $row['Code postal']; ?></td>
            <td><?php echo $row['Adresse']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['Telephone']; ?></td>
            <td><?php echo $row['Message']; ?></td>
        </tr>
        <?php
        }
        ?>