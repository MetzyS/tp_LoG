<?php

require_once('_modele/Categorie.php');

class CategorieControleur extends Categorie
{
    /**
     * Permet de récupérer toute la table categorie
     */
    public function showAll()
    {
        $sql = "SELECT * FROM $this->table";
        $requete = Connexion::query($sql);
        $resultat = $requete->fetchAll();
        return $resultat;
    }
};
