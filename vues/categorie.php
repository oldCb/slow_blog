<?php
	include "controleurs/categories.class.php";
    $categorie = new Categories();
    $cat = $categorie->controleCategorie($pdo);
?>
<main class="container">
    <div class="flex">
        <?= $cat ?>
    </div>
</main>
