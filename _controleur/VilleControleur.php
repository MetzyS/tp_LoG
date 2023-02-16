<?php

require_once('_modele/Ville.php');

class VilleControleur extends Ville
{
    /**
     * Permet de récupérer toute la table lignes_commande
     */
    public function showAll()
    {
        $sql = "SELECT * FROM $this->table";
        $requete = Connexion::query($sql);
        $resultat = $requete->fetchAll();
        return $resultat;
    }

    public function showVilleCP($CodePostal)
    {
        $sql ="SELECT * FROM $this->table WHERE $this->cp = $CodePostal";
    }

}