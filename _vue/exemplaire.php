<?php

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

        // Affiche tout les exemplaires
        $exemplaireControleur = new ExemplaireControleur();
        $exemplaires = $exemplaireControleur->showAll();
        $test = $exemplaireControleur->showExemplaire(2);
        echo '<pre>';
        foreach ($exemplaires as $exemplaire) {
            echo $exemplaire['id_exemplaires'] . ' ' . $exemplaire['etat'] . ' ' . $exemplaire['prix'];
            echo '<br>';
        }
        echo '</pre>';


        ?>
    </div>
</body>

</html>