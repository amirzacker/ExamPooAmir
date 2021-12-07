<?php

require_once "../DAO/ProduitDao.php";
$id_category = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT); //pour la securite du get de l'url
$dao = new ProduitDAo();
$produits = $dao->getByIdFiltre($id_category);


// Afficher les données récupérées
require "../view/produit_category_show.html.php";
?>