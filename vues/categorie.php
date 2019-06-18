<?php
	include "controleurs/categories.class.php";
    $categorie = new Categories();
    $cat = $categorie->controleCategorie($pdo);
?>
<main class="container">
	<?= $cat ?>
</main>
