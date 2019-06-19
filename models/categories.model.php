<?php

class CategoriesModel {
    
    private $pdo;
    private $cat;
    private $result;
    
    
    public function getCategorie($pdo){
        
        $this->cat = $pdo->query("SELECT * FROM articles WHERE id_cat=".$_GET['cat']); 
		
        $this->result = '';
        
		while ($row = $this->cat->fetch()) {
            $this->result.= '
            <div class="art_cat">
                <a href="?page=artBlogger&id='.$row['a_id'].'">
                    <h2>'.$row['titre'].'</h2>
                </a>
                <p> '.substr($row['contenu'],0, 20).' ...</p>
            </div>';
		}

        return $this->result;
        
    }

    public function listeCategories($pdo){
        $this->cat = $pdo->query("SELECT * FROM categories");
        $this->result = $this->cat->fetchAll();
        return $this->result;
    }


    // public function getIdCategorie($pdo){

    //     $this->cat = $pdo->prepare("SELECT c_id FROM `categories` WHERE nom_cat = ? ");
    //     $this->cat->execute(array($idCat));

    //     $this->result = $this->cat->fetchAll();

    //     return $this->result;
    // }
    
}

?>