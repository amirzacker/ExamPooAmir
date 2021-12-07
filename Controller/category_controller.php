<?php

require_once "../DAO/CategoryDao.php";

$dao = new CategoryDao();
$results = $dao->getAll();

// Afficher les données récupérées
require "../view/category.html.php";
?>
