<?php

require_once('_modele/LignesCommande.php');

class LignesCommandeControleur extends LignesCommande
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

}