<?php
	include "controleurs/articles.class.php";
    $articles = new Articles();
	$artBlogger = $articles->controlVoirArticle($pdo);
?>

<main class="container">
	<div>
		<p><?= $artBlogger['titre'] ?></p>
		<img src="assets/img/img_article/img_<?= $artBlogger['img'] ?>" alt="image">
		<p><?= $artBlogger['contenu']?></p>
	</div>
</main>