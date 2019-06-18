<?php

Class ConnexionModel {

	private $cnx;
	private $result;

	public function seConnecter($pdo){

		$this->cnx = $pdo->prepare("SELECT * FROM users WHERE email = ? AND mdp = ?");
		$this->cnx->execute(array($_POST["email"], md5($_POST["mdp"])));

		$this->result = $this->cnx->fetchAll();

		$blogger = $this->result[0]['email'];

		include "session.class.php";
		Session::startSession();
		Session::setSession('blogger', $blogger);

		header("Location: ../");

		return $this->result;
		
	}

}

?>