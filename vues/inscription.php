<main class="container">
    <form method="POST" action="controleurs/inscription.class.php">
        <fieldset>
            <legend>Formulaire d'inscription</legend>
            	<div>
				    <label for="nom">Nom</label>
				        <input type="text" name="nom">
				    <label for="prenom">Prénom</label>
				        <input type="text" name="prenom">
				</div>
				<div>
				    <label for="email">E-mail</label>
				        <input type="email" name="email" size="35">
				</div>
				<div>
				    <label for="mdp">Mot de passe</label>
				        <input type="password" name="mdp">
				</div>
				<div>
				    <input type="submit" name="Valider">
				</div>
        </fieldset>
    </form>
</main>
