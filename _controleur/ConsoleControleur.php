<?php

require_once('_modele/Console.php');

class ConsoleControleur extends Console
{
    /**
     * Permet de récupérer toute la table console
     */
    public function showAll()
    {
        $sql = "SELECT * FROM $this->table";
        $requete = Connexion::query($sql);
        $resultat = $requete->fetchAll();
        return $resultat;
    }
};
