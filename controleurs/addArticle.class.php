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

	private $titre;
	private $contenu;
	private $cat;

    public function newArticle($pdo){

    	$this->titre = $_POST['titre'];
    	$this->contenu = $_POST['contenu'];
    	$this->cat = $_POST['cat'];

        if(!empty($this->titre) && !empty($this->contenu) && !empty($this->cat)) {

        	require "../models/articles.model.php";
            $this->article = new ArticlesModel();
            $this->result = $this->article->addArticleBlogger($pdo);

        }

        return $this->result;
        
	}
	
}

?>