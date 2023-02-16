<?php

class Components
{
    public static function categorie($categorie)
    {
        $id = $categorie['id_categories'];
        $nom_cat = $categorie['nom_cat'];
        echo '
<li>
    <a href=index.php?page=jeux&categorie=' . $id. '>' . $nom_cat . '</a>
</li>
';
    }

    public static function card($jeu)
    {
        $id = $jeu['id_jeux'];
        $nom = $jeu['nom_jeux'];
        $prix = $jeu['prix'];
        $image = $jeu['image'];
        $console = strtoupper($jeu['nom']);
        $description = $nom . " sur " . $console;
        $etat = $jeu['etat'];
        $categorie = $jeu['categories_id'];
        echo '
    <article>
        <img src="public/images/jeux/' . $image . '" alt="Image de ' . $nom . '"/>
        <p>' . $description . '<br>Etat: ' . $etat . '</p>
        <p>Prix : ' . $prix . ' Euros.
            <a href="index.php?uc=visite&categorie=' . $categorie . '&jeu=' . $id . '&action=ajouterAuPanier">
                <img src="public/images/mettrepanier.png" title="Ajouter au panier" class="add"/>
            </a>
        </p>
    </article>
    ';
    }
}