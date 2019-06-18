<?php

include "../controleurs/config.php";
include "../models/bdd.class.php";
$bddAcces = new BddAccess();
$pdo = $bddAcces->connect($host,$dbuser,$dbmdp);
include 'creationObjet.class.php';
$creation = new creationObjet();
$crea = $creation->creationObjetConnexion($pdo);


class Connexion {

	private $connexion;
	private $result;
	private $email;
	private $mdp;

	public function controleConnexion($pdo){

		$this->email = $_POST['email'];
		$this->mdp = $_POST['mdp'];

		if(!empty($this->email) && !empty($this->mdp)){

			include "../models/connexion.model.php";
			$this->connexion = new ConnexionModel();
			$this->result = $this->connexion->seConnecter($pdo);

			return $this->result;
		}	

	}

}

?>