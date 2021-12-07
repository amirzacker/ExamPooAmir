<?php require_once 'header.html.php';?>

<?php foreach ($results as $category) {?>
<article>
   
    <ul>
    <li> 
    <a href="produit_category_controller.php?id=<?=$category->getId_category()?>"><?=$category->getName_category()?></a></li>
    </ul>

</article>
<?php }?>
<?php require_once 'footer.html.php';?>
