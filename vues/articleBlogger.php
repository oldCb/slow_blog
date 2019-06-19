<?php
	include "controleurs/articles.class.php";
    $articles = new Articles();
	$artBlogger = $articles->controlVoirArticle($pdo);
?>

<main class="container">
	<div>
		<p><?= $artBlogger['titre'] ?></p>
		<img src="'../img/img_article/<?= $artBlogger['img'] ?> " alt="image">
		<p><?= $artBlogger['contenu']?></p>
	</div>
</main>