<?php

class Exemplaire
{
    /**
     * Permet de récupérer toute la table exemplaire
     */
    public static function showAll()
    {
        $sql = "SELECT * FROM exemplaire";
        $requete = Connexion::query($sql);
        $resultat = $requete->fetchAll();
        return $resultat;
    }
};
