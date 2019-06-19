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
	private $img;

    public function newArticle($pdo){

    	$this->titre = $_POST['titre'];
    	$this->contenu = $_POST['contenu'];
		$this->cat = $_POST['cat'];
		
		// verif fichier img

		$uploadDir = '../assets/img/img_article/img_';

		$exploded = explode('.', $_FILES['fichier']['name']);
		$extension = end($exploded);
		$uploadFile = $uploadDir . basename(time() . '.' . $extension);
		$this->img = basename(time() . '.' . $extension);

		$fichiersExtensions = array('jpg', 'jpeg', 'png');
		$fichiersTypes = array('image/jpeg', 'image/jpg', 'image/png');
		var_dump( $_FILES['fichier']);

		if(in_array($extension, $fichiersExtensions)){

			if(in_array(mime_content_type($_FILES['fichier']['tmp_name']), $fichiersTypes)) {

				if(move_uploaded_file($_FILES['fichier']['tmp_name'], $uploadFile)) {
					var_dump('fichier accepté');

					if(!empty($this->titre) && !empty($this->contenu) && !empty($this->cat) && !empty($this->img)) {

						require "../models/articles.model.php";
						$this->article = new ArticlesModel();
						$this->result = $this->article->addArticleBlogger($pdo, $this->titre,$this->contenu,$this->cat,$this->img);
			
					}

					return $this->result;
				}
				else {
					var_dump('fichier non accepté');
				}
			}
			else {
				var_dump('fichier non accepté');
			}
		}    
        
	}
	
}

?>