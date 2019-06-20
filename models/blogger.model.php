<?php

class Blogger {

	private $blogger;
	private $result;
	private $user;
	private $delete;

	public function getAllBloggers($pdo){

		$this->blogger = $pdo->prepare("SELECT * FROM users");
		$this->result = $this->blogger->fetchAll();

		return $this->result;

	}

	public function getIdBlogger($pdo){

		include "../controleurs/session.class.php";
		Session::startSession();
		$email = Session::getSession('blogger');

        $this->blogger = $pdo->prepare("SELECT u_id FROM users WHERE email = ?");
        $this->blogger->execute(array($email));

        $this->result = $this->blogger->fetchAll();

		return $this->result;
	}

	public function getInfosBlogger($pdo){

		Session::startSession();
		$email = Session::getSession('blogger');

		$this->blogger = $pdo->prepare("SELECT * FROM users WHERE email = ?");
		$this->blogger->execute(array($email));

		$this->result = $this->blogger->fetchAll();

		return $this->result;

	}

	public function deleteBlogger($pdo) {

		Session::startSession();
		$email = Session::getSession('blogger');

		/* requete suppression articles d'un blogger ok sur mysql */
		// $this->blogger = $pdo->prepare("DELETE FROM articles WHERE articles.id_user IN (SELECT users.u_id FROM users WHERE users.email = ?)");
		// $this->blogger->execute(array($email));

		// $this->result = $this->blogger->fetchAll();

		/* requete suppresion blogger ok sur mysql */

		$this->user = $pdo->prepare("DELETE FROM users WHERE users.email = ? ");
		$this->user->execute(array($email));

		$this->delete = $this->user->fetch();

		return $this->delete;

	}

}

?>