<?php

class Blogger {

	private $blogger;
	private $result;

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

}

?>