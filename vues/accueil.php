<?php
    include "controleurs/articles.class.php";
    $articles = new Articles();
    $art = $articles->controlLastArticles($pdo);
?>

<main>
    <div class="header">
        <h1>Your slow cosmetics blog</h1>
    </div>
        <div class="article">
        <?php foreach($art as $valeurArt): ?>
        <div class="art">
            <a href="?page=artBlogger&id=<?= intval($valeurArt['a_id']) ?>">
                <h2><?= $valeurArt['titre'] ?></h2>
            </a>
            <p><?= substr($valeurArt['contenu'], 0,10) . ' ...' ?></p>
        </div>
        <?php endforeach ?>
    </div>  
</main>