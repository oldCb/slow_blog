<?php

include("config.php");

include("../models/bdd.class.php");
$bddAcces = new BddAccess();
$pdo = $bddAcces->connect($host,$dbuser,$dbmdp);

include 'creationObjet.class.php';
$creation = new CreationObjet();
$crea = $creation->creationObjetEditArticle($pdo);

class EditArticle {
    
    private $article;
    private $result;

    private $id_cat;
    private $titre;
    private $contenu;

    public function modifArticle($pdo){

        $this->id_cat = $_POST['idArt'];
        $this->titre = $_POST['titre'];
        $this->contenu = $_POST['contenu'];
        
        if(!empty($this->titre) && !empty($this->contenu)) {

        	require "../models/articles.model.php";
            $this->article = new ArticlesModel();
            $this->result = $this->article->editArticle($pdo);

        }

        return $this->result;

    }
}

?>