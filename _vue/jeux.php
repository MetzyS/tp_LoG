<?php
include '../_controleur/JeuxControleur.php';
include '../_modele/Connexion.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php

        // Affiche tout les jeux
        $jeux = JeuxControleur::showAll();
        echo '<pre>';
        foreach ($jeux as $jeu) {
            echo $jeu['id_jeux'] . ' ' . $jeu['nom_jeux'];
            echo '<br>';
        }
        echo '</pre>';

        // Affiche les jeux de la catégorie 1
        $jeuxCategorie = JeuxControleur::showCategorie(1);
        foreach ($jeuxCategorie as $jeu) {
            echo $jeu['nom_jeux'] . '<br>';
        }


        ?>
    </div>
</body>

</html>