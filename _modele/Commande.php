<?php

class Commande
{
    /**
     * Permet de récupérer toute la table commande
     */
    public static function showAll()
    {
        $sql = "SELECT * FROM commande";
        $requete = Connexion::query($sql);
        $resultat = $requete->fetchAll();
        return $resultat;
    }
};
