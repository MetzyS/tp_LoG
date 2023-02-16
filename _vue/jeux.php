<section id="visite">
<aside id="categories">
        <ul >
            <?php
            $categoriesControleur = new CategorieControleur();
            $categories = $categoriesControleur->showAll();
            foreach ($categories as $categorie) {
                Components::categorie($categorie);
            }
            ?>
        </ul>
    </aside>
</section>
<?php
$page_categorie = filter_input(INPUT_GET, 'categorie');
if(!$page_categorie) {
    $page_categorie = '';
};

$jeuCategorie = $data['categorie'];
var_dump($jeuCategorie);
$i = 0;
foreach($jeuCategorie as $jeu) {
    echo $jeu[$i]['titre'];
    $i += 1;
}

// foreach($data['categorie'][0] as $data) {
//     echo $data['categorie'][0]['nom_jeux'];
// }