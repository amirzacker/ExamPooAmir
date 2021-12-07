<?php

require_once "../DAO/ProduitDao.php";
require_once "../DAO/CategoryDao.php";
require_once "../Model/Produit.php";
require_once "../Model/Category.php";
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT); //pour la securite du get de l'url
$dao = new ProduitDAo();
$produit = $dao->getById($id);


if ($_POST != null) {
    if (!empty($_POST['title']) && !empty($_POST['description'])) {
       
        $produit = new Produit();
        $produit->setTitle($_POST['title']); // ici je fais appelle à la méthode setTitle de la class Article (fichier Model/Article)
        $produit->setDescription($_POST['description']); // ici je fais appelle à la méthode setDescription de la class Article
        $produit->setIdArticle($id); // ici je fais appelle à la méthode setDescription de la class Article

        $dao = new ProduitDAo();
        $edit = $dao->edit($produit);


    } else {
        echo "veuller remplir les champs";
    }

} else {
    require "../view/article_editArticle.html.php";

}

?>

