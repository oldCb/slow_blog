<?php

include("config.php");

include("../models/bdd.class.php");
$bddAcces = new BddAccess();
$pdo = $bddAcces->connect($host,$dbuser,$dbmdp);

include 'creationObjet.class.php';
$creation = new CreationObjet();
$crea = $creation->creationObjetArticle($pdo);


class AddArticle {

	private $article;
	private $result;

    public function removeArticle($pdo){

		if(isset($_GET['id'])) {
			require "../models/articles.model.php";
			$this->article = new ArticlesModel();
			$this->result = $this->article->deleteArticle($pdo);
		}

        return $this->result;
        
	}

}

?>