<?php
include '../_controleur/ClientControleur.php';
include '../_modele/Connexion.php'
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php

        // Affiche tout les clients
        $clientControleur = new ClientControleur();
        $clients = $clientControleur->showAll();
        echo '<pre>';
        foreach ($clients as $client) {
            echo $client['id_client'] . ' ' . $client['nom'] . ' ' . $client['prenom'] ;
            echo '<br>';
        }
        echo '</pre>';


        ?>
    </div>
</body>

</html>