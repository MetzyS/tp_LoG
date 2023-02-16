<!DOCTYPE html>
<!--
Prototype de Lord Of Geek (LOG)
-->
<html>
    <head>
        <title>Lord Of Geek 2022</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="public/cssGeneral.css" rel="stylesheet" type="text/css">
        <meta charset="UTF-8">
    </head>
    <body>
        <header>
            <!-- Images En-tête -->
            <img src="public/images/logo.png" alt="Logo Lord Of Geek" />
            <!--  Menu haut-->
            <nav  id="menu">
                <ul>
                    <li><a href="index.php?page=accueil"> Accueil </a></li>
                    <!-- <li><a href="index.php?page=jeux&action=voirCategories"> Voir le catalogue de jeux </a></li> -->
                    <li><a href="index.php?page=jeux&categorie=0"> Voir le catalogue de jeux </a></li>
                    <li><a href="index.php?page=panier&action=voirPanier"> Voir son panier </a></li>
                    <li><a href="index.php?page=compte"> Mon compte </a></li>
                </ul>
            </nav>

        </header>
        <main>
            <?php
        switch($view) {
    case 'accueil' :
        include '_vue/accueil.php';
        break;
    case 'jeux' :
        include '_vue/jeux.php';
        break;
    case 'categorie' :
        include '_vue/jeux.php';
        break;
    case 'exemplaire' :
        include '_vue/exemplaire.php';
        break;
    default:
        break;
}
?>
     </main>
    </body>
</html>