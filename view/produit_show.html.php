<?php require_once 'header.html.php';?>

<article>
    <h1><?= $article->getTitle() ?></h1>
    <span><?= $article->getCreatedAt() ?></span>
    <p><?= $article->getDescription() ?></p>
    <div>
        
        <a href="article_editArticle_controller.php?id=<?= $article->getIdArticle() ?>">Modifier l'article</a>
    </div>
    <div>
        
        <a href="article_deleteArticle_controller.php?id=<?= $article->getIdArticle() ?>">Supprimer l'article</a>
    </div>
</article>

<?php require_once 'footer.html.php';?>