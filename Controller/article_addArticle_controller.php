<?php
require_once "../DAO/ProduitDao.php";
require_once "../DAO/CategoryDao.php";
require_once "../Model/Produit.php";

if ($_POST != null) {
    if (!empty($_POST['title']) && !empty($_POST['description'])&& !empty($_POST['price']) && !empty($_POST['id_category'])) {
        $produit = new Produit();
        $produit->setTitle($_POST['title']); // ici je fais appelle à la méthode setTitle de la class Article (fichier Model/Article)
        $produit->setDescription($_POST['description']); // ici je fais appelle à la méthode setDescription de la class Article
        $produit->setPrice($_POST['price']); // ici je fais appelle à la méthode setTitle de la class Article (fichier Model/Article)
        $produit->setId_category($_POST['id_category']); // ici je fais appelle à la méthode setDescription de la class Article

        $dao = new ProduitDAo();
        $add = $dao->add($produit);


    } else {
        echo "veuller remplir les champs";
    }

} else {
    $dao = new CategoryDao();
$results = $dao->getAll();
    require "../view/article_addArticle.html.php";

}



