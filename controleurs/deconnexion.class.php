<?php

include "session.class.php";
Session::startSession();

include "creationObjet.class.php";
$creation = new CreationObjet();
$crea = $creation->creationObjetDeconnexion();

class Deconnexion {

	private $deconnexion;

	public function seDeconnecter(){
		$_SESSION = array();
		session_destroy();
		header("Location: ../");
	}

}

?>