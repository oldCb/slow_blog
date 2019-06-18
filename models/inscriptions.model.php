<?php 

class InscriptionModel {

	private $inscription;

	public function registerBlogger($pdo){
		
		$query = "INSERT INTO users (nom, prenom, email, mdp) 
				VALUES (?, ?, ?, ?)";

		$this->inscription = $pdo->prepare($query);
		$this->inscription->execute([$_POST['nom'], $_POST['prenom'], $_POST['email'], md5($_POST['mdp'])]);

		header('Location: ../?page=connexion');
	}

}

?>