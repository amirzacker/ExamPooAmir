<?php

require_once "../DAO/ProduitDao.php";

$dao = new ProduitDAo();
$results = $dao->getAll();

// Afficher les données récupérées
require "../view/home.html.php";
?>
