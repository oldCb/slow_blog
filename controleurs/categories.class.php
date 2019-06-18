<?php

include 'models/categories.model.php';

class Categories {
    
    private $categorie;
    private $result;
    
    
    public function controleCategorie($pdo){
        
        if(isset($_GET['page'])){
            $this->categorie = new CategoriesModel();
            $this->result = $this->categorie->getCategorie($pdo);
        }

        return $this->result;
        
    }

        public function controleCatBlogger($pdo){

    	$this->categorie = new CategoriesModel();
    	$this->result = $this->categorie->listeCategories($pdo);

    	return $this->result;
    }
    
}

?>