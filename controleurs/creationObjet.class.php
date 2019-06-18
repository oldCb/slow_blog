<?php

class CreationObjet {

	private $creation;

	public function creationObjetInscription($pdo){
		$this->creation = new Inscription();
		$this->creation->controleInscription($pdo);
	}

	public function creationObjetConnexion($pdo){
		$this->creation = new Connexion();
		$this->creation->controleConnexion($pdo);
	}

	public function creationObjetDeconnexion(){
		$this->creation = new Deconnexion();
		$this->creation->seDeconnecter();
	}

	public function creationObjetArticle($pdo){
		$this->creation = new AddArticle();
		$this->creation->newArticle($pdo);
	}

	public function creationObjetEditArticle($pdo){
		$this->creation = new EditArticle();
		$this->creation->modifArticle($pdo);
	}

}

?>