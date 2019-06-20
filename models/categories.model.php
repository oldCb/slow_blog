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
            <div class="art">
                <div class="art-img">
                    <img class="art-img-style" src="assets/img/img_article/img_'.$row['img'].'"/>
                </div>
                <a href="?page=artBlogger&id='.$row['a_id'].'">
                    <h2>'.$row['titre'].'</h2>
                </a>
                <p> '.substr($row['contenu'],0, 15).' ...</p>
            </div>';
		}

        return $this->result;
        
    }

    public function listeCategories($pdo){
        $this->cat = $pdo->query("SELECT * FROM categories");
        $this->result = $this->cat->fetchAll();
        return $this->result;
    }
    
}

?>