<main class="container">
  <div class="form">
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
          <input type="submit" name="Envoyer" class="btn-primary">
    </form>
  </div>
</main>