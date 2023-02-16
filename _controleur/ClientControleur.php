<?php

require_once('_modele/Client.php');

class ClientControleur extends Client
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

    public function showClientVille($id_ville)
    {
        $sql = "SELECT * FROM $this->table WHERE $this->ville = $this->id_ville";
        $requete = Connexion::query($sql);
        $resultat = $requete->fetchAll();
        return $resultat;
    }
};
