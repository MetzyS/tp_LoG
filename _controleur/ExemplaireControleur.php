<?php

require_once('_modele/Exemplaire.php');

class ExemplaireControleur extends Exemplaire
{
    /**
     * Permet de récupérer toute la table exemplaire
     */
    public function showAll()
    {
        $sql = "SELECT * FROM $this->table";
        $requete = Connexion::query($sql);
        $resultat = $requete->fetchAll();
        return $resultat;
    }

    public function showExemplaire($jeux_id)
    {
        $sql = "SELECT $this->id, $this->prix, $this->image, $this->etat, nom_jeux FROM $this->table JOIN jeux ON $this->jeux_id = jeux.id_jeux WHERE jeux.id_jeux = $jeux_id;";
        $requete = Connexion::query($sql);
        $resultat = $requete->fetchAll();
        return $resultat;
    }
}