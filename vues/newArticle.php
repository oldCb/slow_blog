<?php
	include "controleurs/categories.class.php";
	$categories = new Categories();
	$cat = $categories->controleCatBlogger($pdo);

	include "controleurs/articles.class.php";
	$articles = new Articles();
	$art = $articles->controlVoirArticle($pdo);
?>

<main class="container" id="addArt">
<?php if (isset($_GET['id'])) { ?>
	<div class="form-art">
		<h2>Modification de votre article</h2>
			<form method="POST" action="controleurs/editArticle.class.php">
				<div class="form-group">
					<label for="titre">Titre :</label>
						<input type="text" name="titre" class="form-control" size="50" value="<?= $art['titre'] ?>">
				</div>
				<div class="form-group">
					<label for="contenu">Contenu :</label>
						<textarea rows="7" cols="90" class="form-control" name="contenu"><?= $art['contenu'] ?></textarea>
				</div>
				<div class="form-btn">
					<input type="hidden" name="idArt" value="<?= $_GET['id'] ?>">
					<input type="submit" name="edit" value="Modifier" class="btn-primary btn-validation">
				</div>
			</form>
	</div>
	<?php } else { ?>
	<div class="form-art">
		<h2>Ajoute un article</h2>
			<form method="POST" action="controleurs/addArticle.class.php" enctype="multipart/form-data">
				<div class="form-group">
					<label for="titre">Titre :</label>
						<input type="text" name="titre" size="50" class="form-control">
				</div>
				<div class="form-group">
					<label for="contenu">Contenu :</label>
						<textarea rows="7" cols="90" name="contenu" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label for="contenu">Photo :</label>
						<input type="file" name="fichier" id="fichier" />
				</div>
				<div class="form-group">
					<label for="cat">Catégorie :</label>
						<select name="cat">
							<option selected="true" disabled>Choisis la catégorie</option>
							<?php foreach ($cat as $value) : ?>
								<option value="<?= $value['c_id'] ?>"><?= $value['nom_cat'] ?></option>
							<?php endforeach ?>
						</select>
				</div>
				<div class="form-btn">
					<input type="submit" name="add" value="Ajouter" class="btn-primary btn-validation">
				</div>
			</form>
	</div>
	<?php } ?>
</main>