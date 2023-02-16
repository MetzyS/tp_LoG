<?php

require_once('_modele/Commande.php');

class CommandeControleur extends Commande
{
    /**
     * Permet de récupérer toute la table commande
     */
    public function showAll()
    {
        $sql = "SELECT * FROM $this->table";
        $requete = Connexion::query($sql);
        $resultat = $requete->fetchAll();
        return $resultat;
    }

    /**
     * Permet de montrer les commandes concernant le client (via id)
     */
    public function showCommandeClient($id_client)
    {
        $sql = "SELECT * FROM $this->table JOIN client ON $this->client=client.id_client WHERE client_id = $id_client";
    }
}