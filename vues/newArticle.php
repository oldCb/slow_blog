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
	<form method="POST" action="controleurs/editArticle.class.php">
		<fieldset>
			<legend>Modification d'un article</legend>
			<div>
				<label for="titre">Titre :</label>
					<input type="text" name="titre" size="50" value="<?= $art['titre'] ?>">
			</div>
			<div>
				<label for="contenu">Contenu :</label>
					<textarea rows="7" cols="90" name="contenu"><?= $art['contenu'] ?></textarea>
			</div>
			<div>
				<input type="hidden" name="idArt" value="<?= $_GET['id'] ?>">
				<input type="submit" name="edit" value="Modifier">
			</div>
		</fieldset>
	</form>
	<?php } else { ?>
	<form method="POST" action="controleurs/addArticle.class.php">
		<fieldset>
			<legend>Ajoute un nouvel article</legend>
			<div>
				<label for="titre">Titre :</label>
					<input type="text" name="titre" size="50">
			</div>
			<div>
				<label for="contenu">Contenu :</label>
					<textarea rows="7" cols="90" name="contenu"></textarea>
			</div>
			<div>
				<label for="cat">Catégorie :</label>
					<select name="cat">
						<option></option>
						<?php foreach ($cat as $value) : ?>
							<option value="<?= $value['c_id'] ?>"><?= $value['nom_cat'] ?></option>
						<?php endforeach ?>
					</select>
			</div>
			<div>
				<input type="submit" name="add" value="Ajouter">
			</div>			
		</fieldset>
	</form>
	<?php } ?>
</main>