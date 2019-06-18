<?php
	include "controleurs/articles.class.php";
    $articles = new Articles();
	$art = $articles->controleArticle($pdo);
?>

<main class="container">
	<?= $art ?>
</main>
