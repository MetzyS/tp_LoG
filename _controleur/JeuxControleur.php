<?php

include '../_modele/Jeux.php';

class JeuxControleur
{
    /**
     * Permet de toute la table jeux
     */
    public static function showAll()
    {
        $sql = "SELECT * FROM jeux";
        $requete = Connexion::query($sql);
        $resultat = $requete->fetchAll();
        return $resultat;
    }

    public static function showCategorie($id_categorie)
    {
        $sql = "SELECT * FROM jeux WHERE categories_id = $id_categorie";
        $requete = Connexion::query($sql);
        $resultat = $requete->fetchAll();
        return $resultat;
    }
}
