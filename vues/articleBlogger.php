<?php
	include "controleurs/articles.class.php";
    $articles = new Articles();
	$artBlogger = $articles->controlVoirArticle($pdo);
?>

<main class="container">
	<div>
		<p><?= $artBlogger['titre'] ?></p>
		<p><?= $artBlogger['contenu']?></p>
	</div>
</main>