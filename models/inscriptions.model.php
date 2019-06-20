<?php 

class InscriptionModel {

	private $inscription;
	private $requete;

	public function registerBlogger($pdo){
		
		$this->requete = "INSERT INTO users (nom, prenom, email, mdp) 
				VALUES (?, ?, ?, ?)";

		$this->inscription = $pdo->prepare($this->requete);
		$this->inscription->execute([$_POST['nom'], $_POST['prenom'], $_POST['email'], md5($_POST['mdp']).'1f2ezger3587']);

		header('Location: ../?page=connexion');
	}

}

?>