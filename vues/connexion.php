<main class="container">
    <h2>Connectez-vous</h2>
     <form method="POST" action="controleurs/connexion.class.php">
          <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" name="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="mdp">Mot de passe :</label>
            <input type="password" name="mdp" class="form-control" id="pwd">
          </div>
          <div class="checkbox">
            <input type="checkbox">
            <label> Remember me</label>
          </div>
          <input type="submit" name="Envoyer" class="btn btn-default">
    </form>
</main>