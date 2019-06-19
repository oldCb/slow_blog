<?php
	include "controleurs/articles.class.php";
    $articles = new Articles();
	$artBlogger = $articles->controlVoirArticle($pdo);
?>

<main class="container">
	<div class="art_blogger">
		<h2><?= $artBlogger['titre'] ?></h2>
		<img src="assets/img/img_article/img_<?= $artBlogger['img'] ?>" alt="image">
		<p><?= $artBlogger['contenu']?></p>
	</div>
</main>