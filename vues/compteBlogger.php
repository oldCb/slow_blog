<?php 
	include "controleurs/articles.class.php";
	$articles = new Articles();
	$art = $articles->controlArticlesBlogger($pdo);
	$remove = $articles->controlDeleteArticle($pdo);
?>

<main class="container" id="pageBlogger">
	<h2>Gestion du compte</h2>
	<a href="?page=addArt"><button>Rédiger un nouvel article</button></a>
	<table class="tab">
		<caption>Liste des articles</caption>
		<thead>
			<th>Titre</th>
			<th>Contenu</th>
			<th>Catégorie</th>
			<th>Actif</th>
			<th></th>
		</thead>
		<tbody>
			<?php foreach($art as $valeurArt): ?>
			<tr>
				<td><?= $valeurArt['titre'] ?></td>
				<td><?= substr($valeurArt['contenu'], 0,10) . ' ...' ?></td>
				<td><?= $valeurArt['nom_cat'] ?></td>
				<td><?= $valeurArt['active'] ?></td>
				<td>
					<a href="?page=artBlogger&id=<?= intval($valeurArt['a_id']) ?>"><i class="fas fa-eye"></i></a>
					<a href="?page=addArt&id=<?= intval($valeurArt['a_id']) ?>"><i class="fas fa-edit"></i></a>
					<a href="#&id=<?= intval($valeurArt['a_id']) ?>" class="modalBtn" open-modal="divModal<?= ($valeurArt['a_id']) ?>"><i class="fas fa-trash-alt"></i></a>
					<div class="modal" id="divModal<?= ($valeurArt['a_id']) ?>">
						<div class="mBox">
							<p>Voulez-vous supprimer cet article ?</p>
							<p>Titre: <?= $valeurArt['titre'] ?> </p>
							<button id="close" class="closeBtn" close-modal="divModal<?= ($valeurArt['a_id']) ?>">Annuler</button>
							<button><a href="?page=compte&action=sup&id=<?= intval($valeurArt['a_id']) ?>">Supprimer</a></button>
						</div>
					</div>
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</main>