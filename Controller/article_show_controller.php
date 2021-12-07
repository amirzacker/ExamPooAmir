<?php

require_once "../DAO/ArticleDao.php";
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT); //pour la securite du get de l'url
$dao = new ArticleDAo();
$article = $dao->getById($id);

// Afficher les données récupérées
require "../view/article_show.html.php";
?>