<?php

$page_categorie = filter_input(INPUT_GET, 'categorie');
// if(!$page_categorie) {
//     $page_categorie = '0';
// }
switch($page_categorie) {
    case '0' :
        echo 'Veuillez choisir une catégorie';
}