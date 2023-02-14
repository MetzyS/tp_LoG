<?php

class Categorie
{
    /**
     * Permet de récupérer toute la table categorie
     */
    public static function showAll()
    {
        $sql = "SELECT * FROM categories";
        $requete = Connexion::query($sql);
        $resultat = $requete->fetchAll();
        return $resultat;
    }
};
