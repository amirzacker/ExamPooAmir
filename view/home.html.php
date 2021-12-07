<?php require_once 'header.html.php';?>

<?php foreach ($results as $produits) { ?>
<article>
    <h1><?= $produits->getTitle() ?></h1>
    <span><?= $produits->getPrice() ?></span>
    <p><?= $produits->getDescription() ?></p>
    <p><?= $produits->getId_category() ?></p>

</article>
<?php } ?>
<?php require_once 'footer.html.php';?>
 