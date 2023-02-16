<?php

session_start();
// Pour afficher les erreurs PHP
error_reporting(E_ALL);
ini_set("display_errors", 1);
// Attention : A supprimer en production !!!

include_once '_controleur/JeuxControleur.php';
include_once '_controleur/CategorieControleur.php';
include_once '_controleur/CommandeControleur.php';
include_once '_controleur/ConsoleControleur.php';
include_once '_controleur/ExemplaireControleur.php';
include_once '_controleur/LignesCommandeControleur.php';
include_once '_controleur/VilleControleur.php';
include '_vue/components/Components.php';
include '_modele/Connexion.php';

// if (!isset($view)) {
//     $view = 'accueil';
// }
// $_SESSION['view'] = $view;

// unset($_SESSION);

if (!isset($_SESSION['view'])) {
    $view = 'index';
    $_SESSION['view'] = $view;
}

if (!isset($_SESSION['categorie'])) {
    $categorie = '';
    $_SESSION['categorie'] = $categorie;
}
if (!isset($_SESSION['data'])) {
    $_SESSION['data'] = '';
}


$page = filter_input(INPUT_GET, 'page');
if (!$page) {
    $page = 'accueil';
}

$categorie = filter_input(INPUT_GET, 'categorie');
if (!$categorie) {
    $categorie = '0';
}

        switch($page) {
    case 'accueil' :
        include '_vue/accueil.php';
        break;
    case 'jeux' :
        $jeuxControleur = new JeuxControleur();
        $jeuxControleur->show();
        switch($categorie) {
            case '1' :
                $jeuxControleur->showCategorie(1);
                break;
            case '2' :
                $jeuxControleur->showCategorie(2);
                break;
            case '3' :
                $jeuxControleur->showCategorie(3);
                break;
            default:
                $jeuxControleur->showCategorie(0);
        }
        break;
    // case 'categorie' :
    //     $jeuxControleur = new JeuxControleur();
    //     $jeuxControleur->showCategorie($id_categorie);
    //     include '_controleur/jeux.php';
    //     break;
    case 'exemplaire' :
        include '_controleur/exemplaire.php';
        break;
    default:
        break;
}

$view = $_SESSION['view']; // change la variable pour le template
$data = $_SESSION['data'];

include("_vue/template.php");