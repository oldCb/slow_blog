<?php

include("config.php");
include("../models/bdd.class.php");
$bddAcces = new BddAccess();
$pdo = $bddAcces->connect($host,$dbuser,$dbmdp);
include 'creationObjet.class.php';
$creation = new CreationObjet();
$crea = $creation->creationObjetInscription($pdo);


class Inscription {

	private $inscription;
	private $result;
	private $nom;
	private $prenom;
	private $email;
	private $mdp;

	public function controleInscription($pdo){
           
		$this->nom = $_POST['nom'];
		$this->prenom = $_POST['prenom'];
		$this->email = $_POST['email'];
		$this->mdp = $_POST['mdp'];

        if(!empty($this->nom) && !empty($this->prenom) && !empty($this->email) && !empty($this->mdp)) {

        	include '../models/inscriptions.model.php';
        	$this->inscription = new InscriptionModel();
        	$this->result = $this->inscription->registerBlogger($pdo);

        }

        return $this->result;
       		
	}
			
}


?>
        


