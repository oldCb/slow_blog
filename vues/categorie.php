<?php
	include "controleurs/categories.class.php";
    $categorie = new Categories();
    $cat = $categorie->controleCategorie($pdo);
    $page = $categorie->controlePagination($pdo);
?>
<main class="container">
    <div class="flex">
        <?= $cat ?>
    </div>
    <div class="pagination">
        <?= $page ?>
    </div>
</main>
