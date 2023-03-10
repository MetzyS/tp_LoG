<?php

class Jeux
{
    protected $table = 'jeux';
    protected $id = 'id_jeux';
    protected $nom_jeux = 'nom_jeux';
    protected $categories_id = 'categories_id';

    public function showAll()
    {
        $sql = "SELECT * FROM $this->table";
        $requete = Connexion::query($sql);
        $resultat = $requete->fetchAll();
        return $resultat;
    }

    public function showCategorie($id_categorie)
    {
        $sql = "SELECT * FROM $this->table WHERE $this->categories_id = $id_categorie";
        $requete = Connexion::query($sql);
        $resultat = $requete->fetchAll();
        return $resultat;
    }
};


