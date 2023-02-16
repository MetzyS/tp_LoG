<?php

require_once('_modele/Jeux.php');

class JeuxControleur extends Jeux
{
    /**
     * Permet de toute la table jeux
     */
    // public function showAll()
    // {
    //     $sql = "SELECT * FROM $this->table";
    //     $requete = Connexion::query($sql);
    //     $resultat = $requete->fetchAll();
    //     return $resultat;
    // }

    public function show() {
        $jeux = Jeux::showAll();
        $id_categorie = filter_input(INPUT_GET, 'categorie');
        $categorie = Jeux::showCategorie($id_categorie);
        $view = 'jeux';
        $_SESSION['view'] = $view;
        $_SESSION['data'] = [
            'jeu' => $jeux,
            'categorie'=> $categorie,
        ];
    }

}
