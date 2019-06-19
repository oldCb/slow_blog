<?php

class ArticlesModel {
    
    private $pdo;
    private $requete;
    private $article;
    private $result;
    
    public function getArticle($pdo){
        
        $this->article = $pdo->query("SELECT * FROM articles WHERE a_id=".$_GET['article']);
        
        $this->result = '';
        
        while ($row = $this->article->fetch()) {
            $this->result.= '
            <a href="article='.$row['a_id'].'"><h2>'.$row['titre'].'</h2>
            </a>'
            . '<p> '.$row['contenu'].'</p>';
		}
        
        return $this->result;
        
    }

    public function getArticlesBlogger($pdo){

        $email = Session::getSession('blogger');
        
        $this->requete = $pdo->prepare("SELECT * FROM `articles`
                                        INNER JOIN users ON articles.id_user = users.u_id
                                        INNER JOIN categories ON articles.id_cat = categories.c_id
                                        WHERE `email` = ?
                                    ");

        $this->requete->execute(array($email));

        $this->result = $this->requete->fetchAll();

        return $this->result;
    }


    public function seeArticleBlogger($pdo){

        $this->requete = $pdo->prepare("SELECT * FROM articles WHERE a_id = ?");
        $this->requete->execute(array($_GET['id']));
        
        $this->result = $this->requete->fetch();

        return $this->result;

    }


    public function addArticleBlogger($pdo){

        /* récup email session en cours pour enregistrer l'id du blogger lors de l'ajout d"un article */

        include "blogger.model.php";
        $blogger = new BLogger();
        $idBlogger = $blogger->getIdBlogger($pdo);
        $idB = intval(array($idBlogger));

        /* requete pr insertion */

        $this->requete = $pdo->prepare("INSERT INTO `articles`(`titre`, `contenu`, `img`, `actif`, `id_user`, `id_cat`) 
                                        VALUES (:titre,
                                                :contenu,
                                                'image',
                                                1,
                                                :id_user,
                                                :id_cat)
                                        ");

        $this->requete->bindParam(':titre', $_POST['titre']);
        $this->requete->bindParam(':contenu', $_POST['contenu']);
        $this->requete->bindParam(':id_user', $idB);
        $this->requete->bindParam(':id_cat', $_POST['cat']);

        $this->requete->execute();

        header("Location: ../?page=compte");

    }

    public function deleteArticle($pdo) {

        $articleId = [intval($_GET['id'])];

        $this->requete = $pdo->prepare("DELETE FROM `articles` WHERE a_id = ?");
        $this->requete->execute($articleId);

        header("Location: ?page=compte");
        
    }
    
    public function editArticle($pdo) {

        $titre = $_POST['titre'];
        $contenu = $_POST['contenu'];
        $a_id = $_POST['idArt'];
         
        $this->requete = $pdo->prepare('UPDATE articles
                                        SET titre="'.$titre.'", contenu="'.$contenu.'"
                                        WHERE a_id ='.$a_id);

        $this->requete->execute();

        header("Location: ../?page=compte");

    }
    
}


?>