<?php

require_once "../DAO/ArticleDao.php";
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT); //pour la securite du get de l'url
$dao = new ArticleDAo();
$article = $dao->delet($id);


   


require "../view/article_deleteArticle.html.php";



?>

