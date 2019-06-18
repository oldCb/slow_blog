<?php

include "models/articles.model.php";

class Articles {

    private $article;
    private $result;

    public function controleArticle($pdo){

        if(isset($_GET['page'])){
            $this->article = new ArticlesModel();
            $this->result = $this->article->getArticle($pdo);
        }

        return $this->result;
    }

    public function controlArticlesBlogger($pdo){

    	if ($_SESSION == true) {
    		$this->article = new ArticlesModel();
            $this->result = $this->article->getArticlesBlogger($pdo);
    	}

    	return $this->result;

    }

    public function controlVoirArticle($pdo){

        if (isset($_GET['id'])) { 
    		$this->article = new ArticlesModel();
            $this->result = $this->article->seeArticleBlogger($pdo);
            
            return $this->result;
    	}

    }

    public function controlDeleteArticle($pdo) {

        if (isset($_GET['id'])) { 
            $this->article = new ArticlesModel();            
            $this->result = $this->article->deleteArticle($pdo);

            return $this->result;
        }

    }
}

?>