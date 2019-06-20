<main class="container">
	<div class="form-inscription">
		<h2>Formulaire d'inscription</h2>
		<form method="POST" action="controleurs/inscription.class.php">
            <div class="form-group">
				<label for="nom">Nom</label>
				    <input type="text" name="nom" class="form-control">
				<label for="prenom">Prénom</label>
				    <input type="text" name="prenom" class="form-control">
			</div>
			<div class="form-group">
				<label for="email">E-mail</label>
				    <input type="email" name="email" size="35" class="form-control">
			</div>
			<div class="form-group">
				<label for="mdp">Mot de passe</label>
				    <input type="password" name="mdp" class="form-control">
			</div>
			<div class="form-btn">
				<input type="submit" name="Envoyer" class="btn-primary btn-validation" value="M'inscrire">
			</div>
    	</form>
	</div>
</main>
