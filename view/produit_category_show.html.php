<?php require_once 'header.html.php';?>



<?php foreach ($produits as $produit) { ?>
<article>
    <h1><?= $produit->getTitle() ?></h1>
    <span><?= $produit->getPrice() ?></span>
    <p><?= $produit->getDescription() ?></p>

</article>
<?php } ?>
<?php require_once 'footer.html.php';?>